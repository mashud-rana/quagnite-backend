<?php

namespace App\Http\Controllers\Playground;

use Exception;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\AzureProvision;
use App\Services\PlaygroundService;
use App\Http\Controllers\Controller;
use App\Services\Playground\AzureService;

class AzurePlayController extends Controller
{
    private $appName;
    private $userPrefix;
    private $azureDomain;

    public function __construct(
        private PlaygroundService $playgroundService,
        private AzureService $azureService
    ) {
        $this->appName = config('settings.azure_app_name');
        $this->userPrefix = config('settings.azure_user_prefix');
        $this->azureDomain = config('settings.azure_domain');
    }

    public function index()
    {
        return view('frontend.playground.azure.azure-playground');
    }

    public function provisionAzure()
    {

        // check service active or not
        if (!$this->playgroundService->checkPlaygroundIsActive(PlAYGD_AZURE)) {

            return $this->playgroundService->cloudServiceNotAvailable();
        }
        // check all the settings are added
        if (!$this->playgroundService->isAzureSettingsAdded()) {

            return $this->playgroundService->cloudServiceNotAvailable();
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

        try {
            $userPassword = generatePassword();
            $principleName = $this->userPrefix . Str::random(10) . '@' . $this->azureDomain;
            $userData = [
                "accountEnabled" => true,
                "displayName" => $this->appName . " User",
                "mailNickname" => $this->appName . "User",
                "userPrincipalName" => $principleName,
                "passwordProfile" => [
                    "forceChangePasswordNextSignIn" => false,
                    "password" => $userPassword,
                ]
            ];


            $azureUserId = $this->azureService->createAzureUser($userData);

            // Assign User in a Projects
            if ($azureUserId) {

                $data['username'] = $principleName;
                $data['password'] = $userPassword;
                $data['url'] = 'https://portal.azure.com/' . $this->azureDomain;
                $data['azure_user_id'] = $azureUserId;

                // Insert Lab Info
                $labInfo = $this->insertLabInfo($data);

                $data['duration'] = $labInfo->start_time->diffInSeconds($labInfo->end_time);
                $data['lab_id'] = $labInfo->id;

                return response()->json(['message' => 'success', 'status' => 200, 'data' => $data]);
            } else {
                return $this->playgroundService->cloudServiceNotAvailable();
            }
        } catch (Exception $e) {
            logger($e->getMessage());
            return $this->playgroundService->cloudServiceNotAvailable();
        }
    }

    public function getUserOccupiedLab()
    {
        return AzureProvision::where('user_id', auth()->id())->first();
    }

    public function insertLabInfo($data)
    {
        $provision = new AzureProvision;
        $provision->azure_user_id = $data['azure_user_id'];
        $provision->username = $data['username'];
        $provision->password = $data['password'];
        $provision->url = $data['url'];
        $provision->user_id = auth()->id();
        $provision->start_time = Carbon::now();
        $provision->end_time = Carbon::now()->addHours(config('settings.playground_duration'));
        $provision->save();

        return $provision;
    }

    public function endAzureLab(Request $request)
    {
        $lab = AzureProvision::find($request->lab_id);

        $this->azureService->deleteAzureUser($lab->azure_user_id);
        $lab->delete();

        return response()->json(['message' => 'success', 'status' => 200]);
    }
}
