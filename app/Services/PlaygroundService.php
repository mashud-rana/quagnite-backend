<?php

namespace App\Services;

use App\Models\AwsAccount;
use App\Models\EnrollPlayground;
use App\Models\GcpProject;
use App\Models\Playground;
use App\Models\PlaygroundConfiguration;
use App\Models\PlaygroundLab;
use App\Models\User;
use Aws\Credentials\CredentialProvider;
use Aws\Ec2\Ec2Client;
use Aws\Iam\IamClient;
use Aws\Route53\Route53Client;
use Carbon\Carbon;
use Exception;
use Google\Client as GoogleClient;
use Google\Service\CloudResourceManager;
use Google\Service\CloudResourceManager\GetIamPolicyRequest;
use Google\Service\CloudResourceManager\SetIamPolicyRequest;
use GuzzleHttp\Client;

class PlaygroundService
{
    public function checkEnrollment(User $user, string $playgroundName)
    {
        try {
            $playgroundId = Playground::where('type', $playgroundName)->value('id');
            if ($playgroundId === null) {
                throw new \Exception('Playground not found');
            }

            return EnrollPlayground::where('user_id', $user->id)
                ->where('playground_id', $playgroundId)
                ->exists();
        } catch (\Exception $e) {
            return false;
        }
    }

    public function checkPlaygroundIsActive($type)
    {
        return Playground::where('type', $type)->active()->exists();
    }

    public function isPlaygroundAwsSettingsAdded()
    {
        if (! env('AWS_ACCESS_KEY_ID')) {
            logger('Playgrounds AWS Key Not added');

            return false;
        }
        if (! env('AWS_SECRET_ACCESS_KEY')) {
            logger('Playgrounds AWS Secret Not added');

            return false;
        }
        // if (!env('AWS_REGION')) {
        //     logger('Aws Playgrounds region Not added');
        //     return false;
        // }
        if (! config('settings.playground_domain')) {
            logger('Playgrounds Domain Not added');

            return false;
        }
        if (! config('settings.aws_playground_region')) {
            logger('Playgrounds AWS Region Not added');

            return false;
        }
        if (! config('settings.playground_domain_hosted_zone_id')) {
            logger('Playgrounds AWS Region Not added');

            return false;
        }

        return true;
    }

    public function isGcpSettingsAdded()
    {
        if (! env('GOOGLE_APPLICATION_CREDENTIALS')) {
            logger('ENV GOOGLE_APPLICATION_CREDENTIALS is empty');

            return false;
        }
        if (! config('settings.gsuite_domain')) {
            logger('Google workspace Domain not added');

            return false;
        }
        if (! config('settings.gcp_user_prefix')) {
            logger('Google workspace user prefix not added');

            return false;
        }
        if (! config('settings.gcp_app_name')) {
            logger('Google cloud App name not added');

            return false;
        }

        return true;
    }

    public function isAzureSettingsAdded()
    {
        if (! env('AZURE_CLIENT_ID')) {
            logger('ENV AZURE_CLIENT_ID is empty');

            return false;
        }
        if (! env('AZURE_CLIENT_SECRET')) {
            logger('ENV AZURE_CLIENT_SECRET is empty');

            return false;
        }
        if (! env('AZURE_TENANT_ID')) {
            logger('ENV AZURE_TENANT_ID is empty');

            return false;
        }
        if (! config('settings.azure_domain')) {
            logger('Azure Domain not added');

            return false;
        }
        if (! config('settings.azure_user_prefix')) {
            logger('Azure user prefix not added');

            return false;
        }
        if (! config('settings.azure_app_name')) {
            logger('Azure App name not added');

            return false;
        }

        return true;
    }

    public function getPlaygroundSettings($type)
    {
        $id = Playground::where('type', $type)->first()->id;
        $settings = PlaygroundConfiguration::wherePlaygroundId($id)->first()->toArray();

        return $settings;
    }

    public function isWebServerReady($url)
    {

        try {
            $client = new Client();
            $response = $client->get($url);
            $statusCode = $response->getStatusCode();

            if ($statusCode === 200) {
                // Web server is ready
                return true;
            }

            return false;
        } catch (Exception $e) {
            return false;
        }
    }

    public function createInstance($dataArray)
    {
        try {
            // Replace with the region you want to create the instance in
            $region = $dataArray['region'];

            // Replace with the AMI ID for the instance
            $ami = $dataArray['ami'];

            // Replace with the instance type you want to create
            $instanceType = $dataArray['instance_type'];

            // Replace with the name of the key pair you want to use
            // $keyName = $settings['ssh_key_name'];

            // Replace with the security group ID(s) you want to use
            $securityGroups = [$dataArray['security_group']];

            // Create an EC2 client with the specified credentials and region
            $client = new Ec2Client([
                'version' => 'latest',
                'region' => $region,
            ]);

            // Create an EC2 instance with the specified parameters
            $result = $client->runInstances([
                'ImageId' => $ami,
                'InstanceType' => $instanceType,
                // 'KeyName' => $keyName,
                'SecurityGroupIds' => $securityGroups,
                'UserData' => base64_encode($dataArray['bashScript']),
                'MinCount' => 1,
                'MaxCount' => 1,
            ]);

            $instanceId = $result->get('Instances')[0]['InstanceId'];

            // Insert lab info
            $dataArray['instanceId'] = $instanceId;
            $this->insertLabInfo($dataArray);

            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function getInstancePublicIp($dataArray)
    {

        try {
            for ($i = 1; $i <= 10; $i++) {

                $result = $this->getInstanceInfo($dataArray);

                if ($result && isset($result->get('Reservations')[0]['Instances'][0]['PublicIpAddress'])) {
                    return $result->get('Reservations')[0]['Instances'][0]['PublicIpAddress'];
                } else {
                    sleep(3);
                }
            }
        } catch (\Exception $e) {
            logger($e->getMessage());

            return false;
        }
    }

    public function getInstanceInfo($dataArray)
    {

        try {

            $lab = $this->getLabInfo($dataArray['playgroundType']);

            if (! $lab) {
                logger('Lab Info Not found for User '.auth()->id().'Playground '.$dataArray['playgroundType']);

                return false;
            }

            // Replace with the instance ID of the instance you created
            $instanceId = $lab['aws_instance_id'];

            // Create an EC2 client with the specified credentials and region
            $client = new Ec2Client([
                'version' => 'latest',
                'region' => $dataArray['region'],
            ]);

            // Get the instance details
            $result = $client->describeInstances([
                'InstanceIds' => [$instanceId],
            ]);

            return $result;
        } catch (\Exception $e) {
            logger($e->getMessage());

            return false;
        }
    }

    public function terminateInstance($dataArray)
    {
        try {

            $client = new Ec2Client([
                'version' => 'latest',
                'region' => $dataArray['region'],
            ]);

            // Terminate the specified instance
            return $client->terminateInstances([
                'InstanceIds' => [$dataArray['instanceId']],
            ]);
        } catch (\Exception $e) {
            logger($e->getMessage());

            return false;
        }
    }

    public function createRoute53Record($dataArray)
    {

        try {
            $client = new Route53Client([
                'version' => 'latest',
                'region' => $dataArray['region'],
            ]);

            $client->changeResourceRecordSets([
                'HostedZoneId' => $dataArray['hostedZoneId'],
                'ChangeBatch' => [
                    'Changes' => [
                        [
                            'Action' => 'UPSERT',
                            'ResourceRecordSet' => [
                                'Name' => $dataArray['subDomain'], // Wildcard subdomain
                                'Type' => 'A',
                                'TTL' => 300, // Adjust as needed
                                'ResourceRecords' => [
                                    [
                                        'Value' => $dataArray['instancePublicIp'],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ]);
        } catch (Exception $e) {
            // Handle exceptions
            logger($e->getMessage());

            return false;
        }

        return true;

        //     $client = new CloudFormationClient([
        //         'version'     => 'latest',
        //         'region'      => $region,
        //     ]);

        //     $template = json_encode([
        //         'AWSTemplateFormatVersion' => '2010-09-09',
        //         'Resources' => [
        //             'MyDNSRecord' => [
        //                 'Type' => 'AWS::Route53::RecordSet',
        //                 'Properties' => [
        //                     'HostedZoneId' => $hostedZoneId,
        //                     'Name' => $domain,
        //                     'Type' => 'A',
        //                     'TTL' => '300',
        //                     'ResourceRecords' => [$instancePublicIp],
        //                 ],
        //             ],
        //         ],
        //     ]);

        //     // Set the parameters for creating a CloudFormation stack
        //     $params = [
        //         'StackName' => Str::random(30),
        //         'TemplateBody' => $template,
        //     ];

        //     try {
        //         // Create the CloudFormation stack
        //         $result = $client->createStack($params);

        //         // Output the result
        //         dd($result);
        //     } catch (CloudFormationException $e) {
        //         // Handle exceptions
        //         echo 'Error: ' . $e->getMessage();
        //     }
    }

    public function deleteRoute53Record($dataArray)
    {
        try {
            $client = new Route53Client([
                'version' => 'latest',
                'region' => $dataArray['region'],
            ]);

            // Set the parameters for deleting the DNS record set
            return $client->changeResourceRecordSets([
                'HostedZoneId' => $dataArray['hostedZoneId'],
                'ChangeBatch' => [
                    'Changes' => [
                        [
                            'Action' => 'DELETE',
                            'ResourceRecordSet' => [
                                'Name' => $dataArray['subDomain'], // Wildcard subdomain
                                'Type' => 'A',
                                'TTL' => 300, // Adjust as needed
                                'ResourceRecords' => [
                                    [
                                        'Value' => $dataArray['instanceIp'],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ]);
        } catch (Exception $e) {
            // Handle exceptions
            logger($e->getMessage());

            return false;
        }
    }

    public function insertLabInfo($dataArray)
    {
        return PlaygroundLab::create([
            'user_id' => auth()->id(),
            'type' => $dataArray['playgroundType'],
            'aws_instance_id' => $dataArray['instanceId'],
            'start_time' => Carbon::now(),
            'end_time' => Carbon::now()->addHours(config('settings.playground_duration')),
        ])->id;
    }

    public function updateLabInfo($dataArray)
    {
        $labInfo = PlaygroundLab::where('user_id', auth()->id())->where('type', $dataArray['playgroundType'])->first();

        $labInfo->lab_url = 'https://'.$dataArray['subDomain'];
        $labInfo->sub_domain = $dataArray['subDomain'];
        $labInfo->instance_ip = $dataArray['instancePublicIp'];
        $labInfo->save();

        return $labInfo;
    }

    public function getLabInfo($type)
    {
        $lab = PlaygroundLab::where('user_id', auth()->id())
            ->where('type', $type)
            ->first()->toArray();

        if (count($lab) > 0) {
            return $lab;
        } else {

            return false;
        }
    }

    public function getUserOccupiedLab($type)
    {
        return PlaygroundLab::where('user_id', auth()->id())->where('type', $type)->first();
    }

    public function checkSettings($dataArray)
    {
        if (! $dataArray) {
            logger('Settings is empty');

            return false;
        }

        if (! $dataArray['ami']) {
            logger('AMI Settings is empty');

            return false;
        }

        // if (!$dataArray['region']) {
        //     logger('Region Settings is empty');
        //     return false;
        // }

        if (! $dataArray['instance_type']) {
            logger('Instance Type Settings is empty');

            return false;
        }

        if (! $dataArray['security_group']) {
            logger('Security Group Settings is empty');

            return false;
        }

        return true;
    }

    public function deleteAwsUser($data)
    {
        $provider = CredentialProvider::ini($data['profile']);

        $iam = new IamClient([
            'region' => 'us-east-1',
            'version' => 'latest',
            'credentials' => $provider,
        ]);

        // $params = [
        //     'UserName' => $request->username,
        // ];

        $iam->removeUserFromGroup([
            'GroupName' => $data['group'],
            'UserName' => $data['username'],
        ]);
        $iam->deleteLoginProfile([
            'UserName' => $data['username'],
        ]);
        $iam->deleteUser([
            'UserName' => $data['username'],
        ]);

        return true;
    }

    public function updateAwsAccountOccupyStatus($id, $status)
    {
        $acc = AwsAccount::find($id);
        $acc->is_occupied = $status;
        $acc->save();

        return true;
    }

    public function removeGcpUserFromProject($projectId, $username, $userRole)
    {
        $client = new GoogleClient();
        $client->useApplicationDefaultCredentials();
        $client->addScope('https://www.googleapis.com/auth/cloud-platform');

        $cloudResourceManager = new CloudResourceManager($client);

        $request = new GetIamPolicyRequest();

        // Get the current IAM policy of the project
        $policy = $cloudResourceManager->projects->getIamPolicy('projects/'.$projectId, $request);

        // Get all projects users
        $bindings = $policy->getBindings();
        foreach ($bindings as $key => $binding) {
            // get the desire user
            if ($binding->getRole() == $userRole) {

                unset($bindings[$key]);
                $bindings = array_values($bindings);

                // $members = $binding->getMembers();
                // foreach ($members as $k => $member) {
                //     if ($member == 'user:' . $username) {
                //         unset($members[$k]);
                //     }
                // }
                // $binding->setMembers($members);
                // $bindings[$key] = $binding;
            }
        }

        $policy->setBindings([$bindings]);

        $request = new SetIamPolicyRequest();
        $request->setUpdateMask('bindings');
        $request->setPolicy($policy);

        // Update the IAM policy of the project to include the new binding
        $updatedPolicy = $cloudResourceManager->projects->setIamPolicy('projects/'.$projectId, $request);

        return true;
    }

    public function deleteGsuiteUser($username, $appName)
    {
        $client = new GoogleClient();

        $client->useApplicationDefaultCredentials();

        $client->setApplicationName($appName);
        // $client->setAuthConfig($keyFilePath);
        $client->setScopes([
            'https://www.googleapis.com/auth/admin.directory.user',
            'https://www.googleapis.com/auth/admin.directory.group',
            'https://www.googleapis.com/auth/admin.directory.orgunit',
            'https://www.googleapis.com/auth/admin.directory.user.security',
        ]);

        $service = new \Google\Service\Directory($client);

        $result = $service->users->delete($username);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function updateGcpAccountOccupyStatus($id, $status)
    {
        $project = GcpProject::find($id);
        $project->is_occupied = $status;
        $project->save();

        return true;
    }

    public function getPlaygroundInstructions($playgroundType)
    {
        return Playground::whereType($playgroundType)->value('instruction');
    }

    public function serviceNotAvailable()
    {
        return response()->json(['message' => 'Playground not Available right Now. Please Try again after a while!'], 400);
    }

    public function cloudServiceNotAvailable()
    {
        $data['not_available'] = true;
        $data['msg'] = 'Playground not Available right Now. Please Try again after a while!';

        return response()->json(['message' => 'success', 'status' => 200, 'data' => $data]);
    }

    public function getLabDetails($labInfo, $playGround)
    {
        $lab = [];
        $lab['url'] = $labInfo->lab_url;
        // Determine home_url based on user type
        $user = auth()->user();

        if ($user->user_type === USER_TYPE_STUDENT) {
            $lab['home_url'] = route('student.playground');
        } elseif ($user->user_type === USER_TYPE_ADMIN) {
            $lab['home_url'] = route('admin.playground.setting');
        }

        $lab['refresh'] = true;
        $lab['instructions'] = $this->getPlaygroundInstructions($playGround);

        // Check remaining duration
        $now = Carbon::now();
        if ($now->lessThan($labInfo->end_time)) {
            $lab['duration'] = $now->diffInSeconds($labInfo->end_time);
        } else {
            $lab['duration'] = 0;
        }

        return $lab;
    }
}
