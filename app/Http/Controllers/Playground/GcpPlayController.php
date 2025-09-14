<?php

namespace App\Http\Controllers\Playground;

use Exception;
use Carbon\Carbon;
use Google\Client;
use App\Models\GcpProject;
use Illuminate\Support\Str;
use App\Models\GcpProvision;
use Illuminate\Http\Request;
use App\Services\PlaygroundService;
use App\Http\Controllers\Controller;
use Google\Service\CloudResourceManager;
use Google\Service\CloudResourceManager\Binding;
use Google\Service\CloudResourceManager\GetIamPolicyRequest;
use Google\Service\CloudResourceManager\SetIamPolicyRequest;

class GcpPlayController extends Controller
{
    private $appName;
    private $userPrefix;
    private $gsuiteDomain;

    public function __construct(private PlaygroundService $playgroundService)
    {
        $this->appName = config('settings.gcp_app_name');
        $this->userPrefix = config('settings.gcp_user_prefix');
        $this->gsuiteDomain = config('settings.gsuite_domain');
    }

    public function index()
    {
        return view('frontend.playground.gcp.gcp-playground');
    }

    public function labInfo()
    {
        return view('frontend.playground.gcp.lab-info');
    }

    public function provisionGcp()
    {

        // check service active or not
        if (!$this->playgroundService->checkPlaygroundIsActive(PlAYGD_GCP)) {

            return $this->serviceNotAvailable();
        }
        // check all the settings are added
        if (!$this->playgroundService->isGcpSettingsAdded()) {

            return $this->serviceNotAvailable();
        }

        // check if User already Occupied a Account
        if ($lab = $this->getUserOccupiedLab()) {

            $data['username'] = $lab->username;
            $data['password'] = $lab->password;
            $data['url'] = $lab->url;

            // check remaining duration
            $now = Carbon::now();
            if ($now->lessThan($lab->end_time)) {
                $data['duration'] = Carbon::now()->diffInSeconds($lab->end_time);
            } else {
                $data['duration'] = 0;
            }
            $data['lab_id'] = $lab->id;

            return response()->json(['message' => 'success', 'status' => 200, 'data' => $data]);
        }

        // Project Occupation start
        /**
         * Create multiple projects in GCP
         * Got to IAM and Assign a system authorize service account with required role
         * Enable Cloud Resource Manager API
         */
        $gcp = $this->getRandomAvailableProject();

        // checking aws account availablilty
        if ($gcp->project_id ?? false) {

            try {
                /**
                 * Initially have to create a gsuite user account
                 */
                $member = $this->generateGsuiteUser();

                // Assign User in a Projects
                if ($this->assignUserInProject($gcp->project_id, $member['username'], $gcp->user_role)) {

                    $data['username'] = $member['username'];
                    $data['password'] = $member['password'];
                    $data['url'] = $gcp->project_url;
                    $data['project_id'] = $gcp->id;

                    // Insert Lab Info
                    $labInfo = $this->insertLabInfo($data);

                    // Update AWS Account Occupied status
                    $this->playgroundService->updateGcpAccountOccupyStatus($gcp->id, true);

                    $data['duration'] = $labInfo->start_time->diffInSeconds($labInfo->end_time);
                    $data['lab_id'] = $labInfo->id;

                    return response()->json(['message' => 'success', 'status' => 200, 'data' => $data]);
                } else {
                    return $this->serviceNotAvailable();
                }
            } catch (Exception $e) {
                logger($e->getMessage());
                return $this->serviceNotAvailable();
            }
        } else {

            return $this->serviceNotAvailable();
        }
    }

    public function generateGsuiteUser()
    {
        /**
         * Create a service account in the GCP (eg. mcdns-play@mcdns-playground-383306.iam.gserviceaccount.com)
         * Add json credentials to the system Env
         * Open a gsuite account
         * go to admin console
         * Account > Admin Roles > create a custom roles with user create, delete permissions
         * Add GCP Service account to that roles
         * Enable Admin SDK API in the GCP
         */
        // Create a new instance of Google_Client
        $client = new Client();

        $client->useApplicationDefaultCredentials();

        $client->setApplicationName($this->appName);
        // $client->setAuthConfig($keyFilePath);
        $client->setScopes([
            'https://www.googleapis.com/auth/admin.directory.user',
            'https://www.googleapis.com/auth/admin.directory.group',
            'https://www.googleapis.com/auth/admin.directory.orgunit',
            'https://www.googleapis.com/auth/admin.directory.user.security'
        ]);

        $service = new \Google\Service\Directory($client);

        $user = new \Google\Service\Directory\User();
        $userMail = $this->userPrefix . Str::random(10) . '@' . $this->gsuiteDomain;
        $userPass = generatePassword();
        $user->setPrimaryEmail($userMail);
        $user->setName(new \Google\Service\Directory\UserName());
        $user->getName()->setGivenName($this->appName);
        $user->getName()->setFamilyName('User');
        $user->setPassword($userPass);

        $result = $service->users->insert($user);
        if ($result) {
            $data['username'] = $userMail;
            $data['password'] = $userPass;
            return $data;
        } else {
            return $this->serviceNotAvailable();
        }
    }

    public function assignUserInProject($projectId, $username, $role)
    {
        try {
            $client = new Client();
            $client->useApplicationDefaultCredentials();
            $client->addScope('https://www.googleapis.com/auth/cloud-platform');

            $cloudResourceManager = new CloudResourceManager($client);

            $request = new GetIamPolicyRequest();

            // Get the current IAM policy of the project
            $policy = $cloudResourceManager->projects->getIamPolicy('projects/' . $projectId, $request);

            $binding = new Binding();
            $binding->setRole($role);
            $binding->setMembers(["user:$username"]);
            $policy->setBindings([$policy->getBindings(), $binding]);

            $request = new SetIamPolicyRequest();
            $request->setUpdateMask('bindings');
            $request->setPolicy($policy);

            // Update the IAM policy of the project to include the new binding
            $updatedPolicy = $cloudResourceManager->projects->setIamPolicy('projects/' . $projectId, $request);

            return true;
        } catch (Exception $e) {
            return $this->serviceNotAvailable();
        }
    }

    public function endGcpLab(Request $request)
    {
        $lab = GcpProvision::find($request->lab_id);
        $project = GcpProject::find($lab->gcp_project_id);

        // $data['project_id'] = $project->project_id;
        // $data['username'] = $lab->username;
        // $data['role'] = $project->user_role;

        if (
            $this->playgroundService->removeGcpUserFromProject($project->project_id, $lab->username, $project->user_role) &&
            $this->playgroundService->deleteGsuiteUser($lab->username, $this->appName)
        ) {
            $this->playgroundService->updateGcpAccountOccupyStatus($lab->gcp_project_id, false);
            $lab->delete();
        }

        return response()->json(['message' => 'success', 'status' => 200]);
    }


    public function getRandomAvailableProject()
    {
        return GcpProject::active()->available()->first();
    }

    public function insertLabInfo($data)
    {
        $provision = new GcpProvision;
        $provision->gcp_project_id = $data['project_id'];
        $provision->username = $data['username'];
        $provision->password = $data['password'];
        $provision->url = $data['url'];
        $provision->user_id = auth()->id();
        $provision->start_time = Carbon::now();
        $provision->end_time = Carbon::now()->addHours(config('settings.playground_duration'));
        $provision->save();

        return $provision;
    }

    public function updateAccountOccupyStatus($id, $status)
    {
        $project = GcpProject::find($id);
        $project->is_occupied = $status;
        $project->save();

        return true;
    }

    public function getUserOccupiedLab()
    {
        return GcpProvision::where('user_id', auth()->id())->first();
    }

    public function serviceNotAvailable()
    {
        $data['not_available'] = true;
        $data['msg'] = 'Playground not Available right Now. Please Try again after a while!';
        return response()->json(['message' => 'success', 'status' => 200, 'data' => $data]);
    }
}
