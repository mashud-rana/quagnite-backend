<?php

namespace App\Http\Controllers\Playground;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\PlaygroundLab;
use Illuminate\Support\Carbon;
use App\Services\PlaygroundService;
use App\Http\Controllers\Controller;

class GitPlayController extends Controller
{
    protected $region;
    protected $domain;
    protected $domainHostedZoneId;

    protected $bashScript = <<<SCRIPT
    #!/bin/bash
    docker run -d -p 8080:8080 nahidul88/git_play
    SCRIPT;


    public function __construct(private PlaygroundService $playgroundService)
    {
        $this->region = config('settings.aws_playground_region');
        $this->domain = config('settings.playground_domain');
        $this->domainHostedZoneId = config('settings.playground_domain_hosted_zone_id');
    }

    public function index()
    {
        return view('frontend.playground.git.git-playground');
    }


    public function provisionLab()
    {
        // check Playground active or not
        if (!$this->playgroundService->checkPlaygroundIsActive(PlAYGD_GIT)) {
            return $this->playgroundService->serviceNotAvailable();
        }

        // check playground aws configurations added
        if (!$this->playgroundService->isPlaygroundAwsSettingsAdded()) {
            return $this->playgroundService->serviceNotAvailable();
        }

        // check if already initialized the playground
        if ($labInfo = $this->playgroundService->getUserOccupiedLab(PlAYGD_GIT)) {

            $lab = $this->playgroundService->getLabDetails($labInfo, PlAYGD_GIT);
            return response()->json(['message' => 'success', 'status' => 200, 'lab' => $lab]);
        }

        //Get and check Playground configurations Settings
        $dataArray = $this->playgroundService->getPlaygroundSettings(PlAYGD_GIT);

        if (!$this->playgroundService->checkSettings($dataArray)) {
            return $this->playgroundService->serviceNotAvailable();
        }

        //create AWS Instance
        $dataArray['region'] = $this->region;
        $dataArray['bashScript'] = $this->bashScript;
        $dataArray['playgroundType'] = PlAYGD_GIT;

        if (!$this->playgroundService->createInstance($dataArray)) {
            return $this->playgroundService->serviceNotAvailable();
        };

        //Get Instance info
        // $result = $this->playgroundService->getInstanceInfo($dataArray);

        // if (!$result) {
        //     return $this->playgroundService->serviceNotAvailable();
        // };

        // Get instance public ip
        // $publicIp = $result->get('Reservations')[0]['Instances'][0]['PublicIpAddress'];

        $publicIp = $this->playgroundService->getInstancePublicIp($dataArray);

        if (!$publicIp) {
            return $this->playgroundService->serviceNotAvailable();
        };

        // Create Route53 Record
        $subDomain = Str::random(20) . '.' . $this->domain;

        $dataArray['hostedZoneId'] = $this->domainHostedZoneId;
        $dataArray['instancePublicIp'] = $publicIp;
        $dataArray['subDomain'] = $subDomain;

        if (!$this->playgroundService->createRoute53Record($dataArray)) {
            return $this->playgroundService->serviceNotAvailable();
        }

        if ($labInfo = $this->playgroundService->updateLabInfo($dataArray)) {

            $lab = $this->playgroundService->getLabDetails($labInfo, PlAYGD_GIT);
            return response()->json(['message' => 'success', 'lab' => $lab]);
        } else {
            return $this->playgroundService->serviceNotAvailable();
        }
    }

    public function endLab(Request $request)
    {

        $lab = PlaygroundLab::whereUserId(auth()->id())->where('type', PlAYGD_GIT)->first();

        if ($lab->aws_instance_id) {

            $dataArray = [
                'region' => $this->region,
                'subDomain' => $lab->sub_domain,
                'hostedZoneId' => $this->domainHostedZoneId,
                'instanceId' => $lab->aws_instance_id,
                'instanceIp' => $lab->instance_ip,
            ];

            $lab->delete();
            $response = $this->playgroundService->terminateInstance($dataArray);
            $response = $this->playgroundService->deleteRoute53Record($dataArray);

            return response()->json(['message' => 'success']);
        }
    }

    public function checkServerStatus(Request $request)
    {
        $isReady = $this->playgroundService->isWebServerReady($request->url);
        logger($isReady);

        if ($isReady) {
            return response()->json([
                'status' => 200,
                'message' => 'success'
            ]);
        } else {
            return response()->json([
                'status' => 400,
                'message' => 'error'
            ]);
        }
    }
}
