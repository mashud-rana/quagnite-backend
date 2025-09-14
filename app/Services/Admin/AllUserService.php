<?php

namespace App\Services\Admin;

use App\Models\User;
use App\Services\BaseService;
use Illuminate\Support\Facades\Hash;

class AllUserService extends BaseService
{
    protected $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function storeOrUpdate($data, $id = null, $user_type = USER_TYPE_MEMBER)
    {
        try {
            $role_id = request()->input('role');
            $data['user_type'] = $user_type;
            $data['password'] = Hash::make($data['password']);
            $data['agreed_terms'] = 1;

            // Update user
            if ($id == null) {
                $data['email_verified_at'] = now();
                $data['created_by'] = auth()->id();
            } else {
                $data['updated_by'] = auth()->id();
            }

            //Call Parent method for store or update
            $user = parent::storeOrUpdate($data, $id);

            // Admin User
            if ($user_type == USER_TYPE_ADMIN) {
                if ($id == null) {
                    $user->assignRole([$role_id]);
                } else {
                    $user = $this->model::find($id);
                    $user->syncRoles([$role_id]);
                }
            }

            return $user;
        } catch (\Exception $e) {
            $this->logFlashThrow($e);
        }
    }
}
