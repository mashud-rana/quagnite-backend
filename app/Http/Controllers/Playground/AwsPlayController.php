<?php

namespace App\Http\Controllers\Playground;

use Carbon\Carbon;
use Aws\S3\S3Client;
use Aws\Ec2\Ec2Client;
use Aws\Iam\IamClient;
use App\Models\AwsAccount;
use App\Models\AwsProvision;
use Illuminate\Http\Request;
use Aws\Exception\AwsException;
use App\Services\PlaygroundService;
use App\Http\Controllers\Controller;
use Aws\Credentials\CredentialProvider;

class AwsPlayController extends Controller
{


    public function __construct(private PlaygroundService $playgroundService)
    {
    }

    public function index()
    {
        return view('frontend.playground.aws');
    }

    public function labInfo()
    {
        return view('frontend.playground.aws.lab-info');
    }

    public function provisionAws()
    {
        // check service active or not
        if (!$this->playgroundService->checkPlaygroundIsActive(PlAYGD_AWS)) {

            return $this->serviceNotAvailable();
        }

        // check if User already Occupied a Account

        if ($lab = $this->getUserOccupiedLab()) {

            $data['username'] = $lab->username;
            $data['password'] = $lab->password;
            $data['url'] = $lab->url;

            $now = Carbon::now();
            if ($now->lessThan($lab->end_time)) {
                $data['duration'] = Carbon::now()->diffInSeconds($lab->end_time);
            } else {
                $data['duration'] = 0;
            }
            $data['lab_id'] = $lab->id;

            return response()->json(['message' => 'success', 'status' => 200, 'data' => $data]);
        }

        // Account Occupation start
        $aws = $this->getRandomAvailableAccount();

        // checking aws account availablilty
        if ($aws->acc_profile ?? false) {

            $provider = CredentialProvider::ini($aws->acc_profile);

            $iam = new IamClient([
                'region' => 'us-east-1',
                'version' => 'latest',
                'credentials' => $provider
            ]);
        } else {

            return $this->serviceNotAvailable();
        }

        // create user and attach user to the aws accounts
        try {
            $userName = 'aws-user-' . time();
            $expiryDate = date('Y-m-d\TH:i:s\Z', strtotime("+59 minutes"));
            $groupName = $aws->user_group;

            // Create user with password and login profile
            $createdUser = $iam->createUser([
                'UserName' => $userName,
                'Tags' => [
                    [
                        'Key' => 'ExpiryDate',
                        'Value' => $expiryDate
                    ]
                ]
            ]);

            // Add User to a Group
            $groupResult = $iam->addUserToGroup([
                'GroupName' => $groupName,
                'UserName' => $userName,
            ]);

            $accountId = $createdUser['User']['Arn'];
            $accountId = explode(':', $accountId)[4];

            // Get the login URL for the user
            $loginUrl = 'https://' . $accountId . '.signin.aws.amazon.com/console/';

            $password = generatePassword();
            $loginProfile = $iam->createLoginProfile([
                'UserName' => $userName,
                'Password' => $password,
            ]);

            $data['username'] = $createdUser['User']['UserName'];
            $data['password'] = $password;
            $data['url'] = $loginUrl;
            $data['acc_id'] = $aws->id;

            // Insert Lab Info
            $labInfo = $this->insertLabInfo($data);

            // Update AWS Account Occupied status
            $this->playgroundService->updateAwsAccountOccupyStatus($aws->id, 1);

            $data['duration'] = $labInfo->start_time->diffInSeconds($labInfo->end_time);
            $data['lab_id'] = $labInfo->id;

            return response()->json(['message' => 'success', 'status' => 200, 'data' => $data]);
        } catch (AwsException $e) {
            logger($e->getMessage());
            return $this->serviceNotAvailable();
        }
    }

    public function deleteEc2Instances($profile)
    {
        $provider = CredentialProvider::ini($profile);
        // Instantiate an instance of the AWS SDK for PHP
        $ec2Client = new Ec2Client([
            'version' => 'latest',
            'region'  => 'us-east-1',
            'credentials' => $provider
        ]);

        // Query for all EC2 instances in your account
        $result = $ec2Client->describeInstances();

        // Loop through each reservation and terminate all instances
        foreach ($result['Reservations'] as $reservation) {
            foreach ($reservation['Instances'] as $instance) {
                $ec2Client->terminateInstances([
                    'InstanceIds' => [$instance['InstanceId']],
                ]);
            }
        }

        return true;
    }

    public function deleteBuckets()
    {
        $provider = CredentialProvider::ini('profile_02');

        // Instantiate an instance of the AWS SDK for PHP
        $s3Client = new S3Client([
            'version' => 'latest',
            'region'  => 'us-east-1',
            'credentials' => $provider,
        ]);

        // List all S3 buckets in your account
        $result = $s3Client->listBuckets();

        // Loop through each bucket and delete it if it belongs to the IAM user
        foreach ($result['Buckets'] as $bucket) {
            $bucketOwner = $s3Client->getBucketAcl([
                'Bucket' => $bucket['Name'],
            ])['Owner']['ID'];

            // if ($bucketOwner == 'IAM_USER_ACCESS_KEY_ID') {
            //     $s3Client->deleteBucket([
            //         'Bucket' => $bucket['Name'],
            //     ]);
            // }
            $s3Client->deleteBucket([
                'Bucket' => $bucket['Name'],
            ]);
        }
    }

    public function getAvailableAccounts()
    {
        return AwsAccount::active()->available()->get();
    }

    public function getRandomAvailableAccount()
    {
        return AwsAccount::active()->available()->first();
    }

    public function getUserOccupiedLab()
    {
        return AwsProvision::where('user_id', auth()->id())->first();
    }

    public function endAwsLab(Request $request)
    {
        $lab = AwsProvision::find($request->lab_id);
        $account = AwsAccount::find($lab->aws_account_id);

        $data['profile'] = $account->acc_profile;
        $data['group'] = $account->user_group;
        $data['username'] = $lab->username;

        // if (
        //     $this->deleteEc2Instances($account->acc_profile) &&
        //     $this->deleteUser($data)
        // ) {
        //     $lab = AwsProvision::find($request->lab_id);
        //     $this->updateAccountOccupyStatus($lab->aws_account_id, 0);
        //     $lab->delete();
        // }
        if ($this->playgroundService->deleteAwsUser($data)) {
            //update status
            $this->playgroundService->updateAwsAccountOccupyStatus($lab->aws_account_id, 0);
            // delete lab
            $lab->delete();
        }

        return response()->json(['message' => 'success', 'status' => 200]);
    }

    public function insertLabInfo($data)
    {
        $provision = new AwsProvision;
        $provision->aws_account_id = $data['acc_id'];
        $provision->username = $data['username'];
        $provision->password = $data['password'];
        $provision->url = $data['url'];
        $provision->user_id = auth()->id();
        $provision->start_time = Carbon::now();
        $provision->end_time = Carbon::now()->addHours(config('settings.playground_duration'));
        $provision->save();

        return $provision;
    }

    public function serviceNotAvailable()
    {
        $data['not_available'] = true;
        $data['msg'] = 'Playground not Available right Now. Please Try again after a while!';
        return response()->json(['message' => 'success', 'status' => 200, 'data' => $data]);
    }
}
