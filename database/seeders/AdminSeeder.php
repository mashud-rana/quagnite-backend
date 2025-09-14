<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::updateOrCreate([
            'uuid'              => Str::uuid(),
            'first_name'        => 'Super',
            'last_name'         => 'Admin',
            'email'             => 'admin@app.com',
            'email_verified_at' => now(),
            'password'          => '$2y$10$mmv2lR.uMmhG.EC9FQEirO4YrLtjqATfmzDPwIPKLIDLSCNhPtVqu',   // 12345678
            'user_type'         => USER_TYPE_ADMIN,
            'gender'            => 'male',
            'status'            => ACTIVE,
            'remember_token'    => Str::random(60),
            'phone'             => '012345678910',
            'date_of_birth'     => '2000-10-21',
            'agreed_terms'      => 1,
        ]);

        $role = Role::create(['name' => 'Super Admin']);
        $permissions = Permission::pluck('id', 'id')->all();
        $role->syncPermissions($permissions);
        $admin->assignRole([$role->id]);
    }
}
