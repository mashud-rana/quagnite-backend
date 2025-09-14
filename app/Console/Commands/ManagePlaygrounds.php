<?php

namespace App\Console\Commands;

use App\Models\AwsAccount;
use App\Models\AwsProvision;
use App\Models\AzureProvision;
use App\Models\GcpProject;
use App\Models\GcpProvision;
use App\Models\PlaygroundLab;
use App\Services\Playground\AzureService;
use App\Services\PlaygroundService;
use Illuminate\Console\Command;

class ManagePlaygrounds extends Command
{
    public function __construct(
        private PlaygroundService $playgroundService,
        private AzureService $azureService
    ) {
        parent::__construct();
    }

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'manage:playgrounds';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $hourMintues = date('H:i');
        // Aws Image based playgrounds
        $labs = PlaygroundLab::where('end_time', '<', now())->get();

        if (count($labs) > 0) {

            foreach ($labs as $lab) {

                if ($lab->aws_instance_id) {
                    $dataArray = [
                        'region' => config('settings.aws_playground_region'),
                        'subDomain' => $lab->sub_domain,
                        'hostedZoneId' => config('settings.playground_domain_hosted_zone_id'),
                        'instanceId' => $lab->aws_instance_id,
                        'instanceIp' => $lab->instance_ip,
                    ];

                    $this->playgroundService->terminateInstance($dataArray);
                    $this->playgroundService->deleteRoute53Record($dataArray);

                    //log
                    info("[$hourMintues]".'[Playground removed] Instance Ip: '.$lab->instance_ip.', Lab URI: '.$lab->sub_domain);

                    $lab->delete();
                }
            }
        } else {
            info("[$hourMintues] There is no running playgrounds to remove!");
        }

        // AWS Cloud Playgrounds
        $labs = AwsProvision::where('end_time', '<', now())->get();

        if (count($labs) > 0) {

            foreach ($labs as $lab) {

                $account = AwsAccount::find($lab->aws_account_id);

                $data['profile'] = $account->acc_profile;
                $data['group'] = $account->user_group;
                $data['username'] = $lab->username;

                if ($this->playgroundService->deleteAwsUser($data)) {
                    //update status
                    $this->playgroundService->updateAwsAccountOccupyStatus($lab->aws_account_id, 0);

                    //log
                    info("[$hourMintues]".'[Aws Playground removed] Username: '.$lab->username.', Lab URI: '.$lab->url);
                    // delete lab
                    $lab->delete();
                }
            }
        } else {
            info("[$hourMintues] There is no AWS Cloud running playgrounds to remove!");
        }

        // GCP Cloud Playgrounds
        $labs = GcpProvision::where('end_time', '<', now())->get();

        if (count($labs) > 0) {

            foreach ($labs as $lab) {

                $project = GcpProject::find($lab->gcp_project_id);

                if (
                    $this->playgroundService->removeGcpUserFromProject($project->project_id, $lab->username, $project->user_role) &&
                    $this->playgroundService->deleteGsuiteUser($lab->username, config('settings.gcp_app_name'))
                ) {
                    $this->playgroundService->updateGcpAccountOccupyStatus($lab->gcp_project_id, false);

                    //log
                    info("[$hourMintues]".'[Gcp Playground removed] Username: '.$lab->username.', Lab URI: '.$lab->url);

                    $lab->delete();
                }
            }
        } else {
            info("[$hourMintues] There is no GCP Cloud running playgrounds to remove!");
        }

        // Azure Cloud Playgrounds
        $labs = AzureProvision::where('end_time', '<', now())->get();

        if (count($labs) > 0) {

            foreach ($labs as $lab) {

                $this->azureService->deleteAzureUser($lab->azure_user_id);

                //log
                info("[$hourMintues]".'[Azure Playground removed] Username: '.$lab->username.', Azure User ID: '.$lab->azure_user_id);

                $lab->delete();
            }
        } else {
            info("[$hourMintues] There is no Azure Cloud running playgrounds to remove!");
        }

        return 0;
    }
}
