<?php

namespace Database\Seeders;

use GC;
use App\Models\Playground;
use App\Enums\PlaygroundTypes;
use Illuminate\Database\Seeder;
use App\Models\PlaygroundCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PlaygroundSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $playgrounds = [
            [
                'title' => 'Aws',
                'type' => PlAYGD_AWS,
                'lab_url' => config('app.url') . '/playground/aws',
                'overview' => file_get_contents(database_path('seeders/html/aws/overview.html')),
                'playground_category_id' => PlaygroundCategory::where('title', 'Cloud Playground')->first()->id,
                'image' => 'demo/images/playground/playground-3.png',
                'status' => ACTIVE,
            ],
            [
                'title' => 'Azure',
                'playground_category_id' => PlaygroundCategory::where('title', 'Cloud Playground')->first()->id,
                'overview' => file_get_contents(database_path('seeders/html/azure/overview.html')),
                'type' => PlAYGD_AZURE,
                'lab_url' => config('app.url') . '/playground/azure',
                'image' => 'demo/images/playground/playground-2.png',
                'status' => ACTIVE,
            ],
            [
                'title' => 'Google Cloud',
                'type' => PlAYGD_GCP,
                'lab_url' => config('app.url') . '/playground/gcp',
                'overview' => file_get_contents(database_path('seeders/html/google/overview.html')),
                'playground_category_id' => PlaygroundCategory::where('title', 'Cloud Playground')->first()->id,
                'image' => 'demo/images/playground/playground-1.png',
                'status' => ACTIVE,
            ],
            [
                'title' => 'Terraform',
                'playground_category_id' => PlaygroundCategory::where('title', 'DevOps Playground')->first()->id,
                'type' => PlAYGD_TERRAFORM,
                'lab_url' => config('app.url') . '/playground/terraform',
                'overview' => file_get_contents(database_path('seeders/html/terraform/overview.html')),
                'image' => 'demo/images/playground/dev-playground-1.png',
                'instruction' => file_get_contents(database_path('seeders/html/terraform/instruction.html')),
                'status' => ACTIVE,
            ],
            [
                'title' => 'Kubernetes multi-node',
                'playground_category_id' => PlaygroundCategory::where('title', 'DevOps Playground')->first()->id,
                'type' => PlAYGD_K8SMN,
                'overview' => file_get_contents(database_path('seeders/html/kubernetes-multi-node/overview.html')),
                'lab_url' => config('app.url') . '/playground/kubernetes-multi-node',
                'image' => 'demo/images/playground/dev-playground-2.png',
                'instruction' => file_get_contents(database_path('seeders/html/kubernetes-multi-node/instruction.html')),
                'status' => ACTIVE,
            ],
            [
                'title' => 'Kubernetes single-node',
                'playground_category_id' => PlaygroundCategory::where('title', 'DevOps Playground')->first()->id,
                'image' => 'demo/images/playground/dev-playground-3.png',
                'type' => PlAYGD_K8SSN,
                'overview' => file_get_contents(database_path('seeders/html/kubernetes-single-node/overview.html')),
                'lab_url' => config('app.url') . '/playground/kubernetes-single-node',
                'instruction' => file_get_contents(database_path('seeders/html/kubernetes-single-node/instruction.html')),
                'status' => ACTIVE,
            ],
            [
                'title' => 'Ansible',
                'playground_category_id' => PlaygroundCategory::where('title', 'DevOps Playground')->first()->id,
                'image' => 'demo/images/playground/dev-playground-4.png',
                'type' => PlAYGD_ANSIBLE,
                'overview' => file_get_contents(database_path('seeders/html/ansible/overview.html')),
                'lab_url' => config('app.url') . '/playground/ansible',
                'instruction' => file_get_contents(database_path('seeders/html/ansible/instruction.html')),
                'status' => ACTIVE,
            ],
            [
                'title' => 'Git',
                'type' => PlAYGD_GIT,
                'playground_category_id' => PlaygroundCategory::where('title', 'DevOps Playground')->first()->id,
                'image' => 'demo/images/playground/dev-playground-5.png',
                'overview' => file_get_contents(database_path('seeders/html/git/overview.html')),
                'lab_url' => config('app.url') . '/playground/git',
                'instruction' => file_get_contents(database_path('seeders/html/git/instruction.html')),
                'status' => ACTIVE,
            ],
            [
                'title' => 'Jenkins',
                'type' => PlAYGD_JENKINS,
                'playground_category_id' => PlaygroundCategory::where('title', 'DevOps Playground')->first()->id,
                'image' => 'demo/images/playground/dev-playground-6.png',
                'overview' => file_get_contents(database_path('seeders/html/jenkins/overview.html')),
                'lab_url' => config('app.url') . '/playground/jenkins',
                'instruction' => file_get_contents(database_path('seeders/html/jenkins/instruction.html')),
                'status' => ACTIVE,
            ],
            [
                'title' => 'Maven',
                'type' => PlAYGD_MAVEN,
                'playground_category_id' => PlaygroundCategory::where('title', 'DevOps Playground')->first()->id,
                'image' => 'demo/images/playground/dev-playground-7.png',
                'overview' => file_get_contents(database_path('seeders/html/maven/overview.html')),
                'lab_url' => config('app.url') . '/playground/maven',
                'instruction' => file_get_contents(database_path('seeders/html/maven/instruction.html')),
                'status' => ACTIVE,
            ],
            [
                'title' => 'Helm',
                'type' => PlAYGD_HELM,
                'playground_category_id' => PlaygroundCategory::where('title', 'DevOps Playground')->first()->id,
                'image' => 'demo/images/playground/dev-playground-8.png',
                'overview' => file_get_contents(database_path('seeders/html/helm/overview.html')),
                'lab_url' => config('app.url') . '/playground/helm',
                'instruction' => file_get_contents(database_path('seeders/html/helm/instruction.html')),
                'status' => ACTIVE,

            ],
            [
                'title' => 'Gitlab',
                'type' => PlAYGD_GITLAB,
                'playground_category_id' => PlaygroundCategory::where('title', 'DevOps Playground')->first()->id,
                'image' => 'demo/images/playground/dev-playground-9.png',
                'overview' => file_get_contents(database_path('seeders/html/gitlab/overview.html')),
                'lab_url' => config('app.url') . '/playground/gitlab',
                'instruction' => file_get_contents(database_path('seeders/html/gitlab/instruction.html')),
                'status' => ACTIVE,
            ],
            [
                'title' => 'Docker',
                'type' => PlAYGD_DOCKER,
                'playground_category_id' => PlaygroundCategory::where('title', 'DevOps Playground')->first()->id,
                'image' => 'demo/images/playground/dev-playground-10.png',
                'overview' => file_get_contents(database_path('seeders/html/docker/overview.html')),
                'lab_url' => config('app.url') . '/playground/docker',
                'instruction' => file_get_contents(database_path('seeders/html/docker/instruction.html')),
                'status' => ACTIVE,
            ],
            [
                'title' => 'Grafana Prometheus',
                'type' => PlAYGD_GRPR,
                'playground_category_id' => PlaygroundCategory::where('title', 'DevOps Playground')->first()->id,
                'image' => 'demo/images/playground/dev-playground-11.png',
                'overview' => file_get_contents(database_path('seeders/html/grafana-prometheus/overview.html')),
                'lab_url' => config('app.url') . '/playground/grafana-prometheus',
                'instruction' => file_get_contents(database_path('seeders/html/grafana-prometheus/instruction.html')),
                'status' => ACTIVE,

            ],
            [
                'title' => 'Chef',
                'type' => PlAYGD_CHEF,
                'playground_category_id' => PlaygroundCategory::where('title', 'DevOps Playground')->first()->id,
                'image' => 'demo/images/playground/dev-playground-12.png',
                'overview' => file_get_contents(database_path('seeders/html/chef/overview.html')),
                'lab_url' => config('app.url') . '/playground/chef',
                'instruction' => file_get_contents(database_path('seeders/html/chef/instruction.html')),
                'status' => ACTIVE,
            ],
            [
                'title' => 'Golang',
                'type' => PlAYGD_GO,
                'playground_category_id' => PlaygroundCategory::where('title', 'Programming Playground')->first()->id,
                'image' => 'demo/images/playground/dev-playground-13.png',
                'overview' => file_get_contents(database_path('seeders/html/go/overview.html')),
                'lab_url' => config('app.url') . '/playground/go',
                'instruction' => file_get_contents(database_path('seeders/html/go/instruction.html')),
                'status' => ACTIVE,
            ],
            [
                'title' => 'Podman',
                'type' => PlAYGD_PODMAN,
                'playground_category_id' => PlaygroundCategory::where('title', 'Programming Playground')->first()->id,
                'image' => 'demo/images/playground/dev-playground-14.png',
                'overview' => file_get_contents(database_path('seeders/html/podman/overview.html')),
                'lab_url' => config('app.url') . '/playground/podman',
                'instruction' => file_get_contents(database_path('seeders/html/podman/instruction.html')),
                'status' => ACTIVE,

            ],
            [
                'title' => 'Python',
                'type' => PlAYGD_PYTHON,
                'playground_category_id' => PlaygroundCategory::where('title', 'Programming Playground')->first()->id,
                'image' => 'demo/images/playground/dev-playground-15.png',
                'overview' => file_get_contents(database_path('seeders/html/python/overview.html')),
                'lab_url' => config('app.url') . '/playground/python',
                'instruction' => file_get_contents(database_path('seeders/html/python/instruction.html')),
                'status' => ACTIVE,
            ],
            [
                'title' => 'Java',
                'type' => PlAYGD_JAVA,
                'playground_category_id' => PlaygroundCategory::where('title', 'Programming Playground')->first()->id,
                'image' => 'demo/images/playground/dev-playground-16.png',
                'overview' => file_get_contents(database_path('seeders/html/java/overview.html')),
                'lab_url' => config('app.url') . '/playground/java',
                'instruction' => file_get_contents(database_path('seeders/html/java/instruction.html')),
                'status' => ACTIVE,
            ],
            [
                'title' => 'ArgoCD',
                'type' => PlAYGD_ARGOCD,
                'playground_category_id' => PlaygroundCategory::where('title', 'DevOps Playground')->first()->id,
                'image' => 'demo/images/playground/dev-playground-17.png',
                'overview' => file_get_contents(database_path('seeders/html/argocd/overview.html')),
                'lab_url' => config('app.url') . '/playground/argocd',
                'instruction' => file_get_contents(database_path('seeders/html/argocd/instruction.html')),
                'status' => ACTIVE,

            ],
            [
                'title' => 'Bash',
                'type' => PlAYGD_BASH,
                'lab_url' => config('app.url') . '/playground/bash',
                'playground_category_id' => PlaygroundCategory::where('title', 'Programming Playground')->first()->id,
                'overview' => file_get_contents(database_path('seeders/html/bash/overview.html')),
                'instruction' => file_get_contents(database_path('seeders/html/bash/instruction.html')),
                'image' => 'demo/images/playground/dev-playground-18.png',
                'status' => ACTIVE,
            ],
            [
                'title' => 'Powershell',
                'type' => PlAYGD_PWS,
                'playground_category_id' => PlaygroundCategory::where('title', 'Programming Playground')->first()->id,
                'image' => 'demo/images/playground/dev-playground-19.png',
                'overview' => file_get_contents(database_path('seeders/html/powershell/overview.html')),
                'lab_url' => config('app.url') . '/playground/powershell',
                'instruction' => file_get_contents(database_path('seeders/html/powershell/instruction.html')),
                'status' => ACTIVE,

            ],
            [
                'title' => 'Ubuntu 20.04',
                'type' => PlAYGD_UOS2004,
                'lab_url' => config('app.url') . '/playground/ubuntu',
                'image' => 'demo/images/playground/dev-playground-20.png',
                'playground_category_id' => PlaygroundCategory::where('title', 'DevOps Playground')->first()->id,
                'overview' => file_get_contents(database_path('seeders/html/ubuntu/overview.html')),
                'lab_url' => config('app.url') . '/playground/ubuntu',
                'instruction' => file_get_contents(database_path('seeders/html/ubuntu/instruction.html')),
                'status' => ACTIVE,
            ],
            [
                'title' => 'CentOS 8 Stream',
                'type' => PlAYGD_COS8,
                'playground_category_id' => PlaygroundCategory::where('title', 'DevOps Playground')->first()->id,
                'image' => 'demo/images/playground/dev-playground-21.png',
                'overview' => file_get_contents(database_path('seeders/html/centos/overview.html')),
                'lab_url' => config('app.url') . '/playground/centos',
                'instruction' => file_get_contents(database_path('seeders/html/centos/instruction.html')),
                'status' => ACTIVE,
            ],
        ];


        foreach ($playgrounds as $playground) {
            Playground::create($playground);
        }
    }
}
