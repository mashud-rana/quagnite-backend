<?php

namespace Database\Seeders;

use App\Models\GcpProject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GcpProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = [
            [
                'project_name'  => 'Playground 01',
                'project_no'    => '459407012797',
                'project_id'    => 'playground-01-424810',
                'project_url'   => 'https://console.cloud.google.com/home/dashboard?project=playground-01-424810',
                'user_role'     => 'projects/playground-01-424810/roles/McdnsCustomRole',
            ],
            [
                'project_name'  => 'Playground 02',
                'project_no'    => '918493556394',
                'project_id'    => 'playground-02-424810',
                'project_url'   => 'https://console.cloud.google.com/home/dashboard?project=playground-02-424810',
                'user_role'     => 'projects/playground-02-424810/roles/McdnsCustomRole',
            ],
            [
                'project_name'  => 'Playground 03',
                'project_no'    => '212584505766',
                'project_id'    => 'playground-03-424909',
                'project_url'   => 'https://console.cloud.google.com/home/dashboard?project=playground-03-424909',
                'user_role'     => 'projects/playground-03-424909/roles/McdnsCustomRole',
            ],
            [
                'project_name'  => 'Playground 04',
                'project_no'    => '298474102466',
                'project_id'    => 'playground-03-424910',
                'project_url'   => 'https://console.cloud.google.com/home/dashboard?project=playground-03-424910',
                'user_role'     => 'projects/playground-04-424910/roles/McdnsCustomRole',
            ],
        ];

        foreach ($projects as $project) {
            GcpProject::create($project);
        }
    }
}
