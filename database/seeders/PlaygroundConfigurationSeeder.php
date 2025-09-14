<?php

namespace Database\Seeders;

use App\Models\Playground;
use Illuminate\Database\Seeder;
use App\Models\PlaygroundConfiguration;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use LDAP\Result;

class PlaygroundConfigurationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $playgrounds = Playground::all();

        foreach ($playgrounds as $playground) {
            PlaygroundConfiguration::create([
                'playground_id' => $playground->id,
                'ami' => $this->getPlaygroundAmi($playground->type),
                'instance_type' => $this->getInstanceType($playground->type),
                'security_group' => 'sg-0ca66116ebe85b783',
                'ssh_key_name' => null,
            ]);
        }
    }

    public function getPlaygroundAmi($type)
    {
        switch ($type) {
            case PlAYGD_PODMAN:
            case PlAYGD_DOCKER:
                return "ami-000c6a189941a9213";
                break;
            case PlAYGD_TERRAFORM:
                return "ami-0cb828e1b0df7c8d3";
                break;
            case PlAYGD_K8SMN:
            case PlAYGD_K8SSN:
            case PlAYGD_HELM:
            case PlAYGD_ARGOCD:
                return "ami-063fd5e25024a43bf";
                break;
            case PlAYGD_ANSIBLE:
            case PlAYGD_JENKINS:
                return "ami-01296729e2cf1cfbd";
                break;
            case PlAYGD_GITLAB:
                return "ami-0aa0f2a7a39a9b3e0";
                break;
            default:
                return "ami-02ee95ccfca5842eb";
                break;
        }
    }

    public function getInstanceType($type)
    {
        switch ($type) {
            case PlAYGD_K8SMN:
            case PlAYGD_K8SSN:
            case PlAYGD_HELM:
            case PlAYGD_ARGOCD:
            case PlAYGD_GITLAB:
                return "t2.medium";
                break;
            default:
                return "t2.small";
                break;
        }
    }
}
