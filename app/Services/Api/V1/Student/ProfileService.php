<?php

namespace App\Services\Api\V1\Student;

use App\Models\User;
use App\Services\BaseService;
use App\Services\Utils\FileService;

class ProfileService extends BaseService
{
    protected $model;
    protected $fileService;

    public function __construct(FileService $fileService)
    {
        $this->model = User::class;
        $this->fileService = $fileService;
    }

    public function storeOrUpdate($data, $id = null)
    {
        try {
            // Upload avatar
            if (isset($data['avatar']) && $data['avatar'] != null) {
                if ($id) {
                    $item = $this->get($id);
                    if ($item->avatar) {
                        $this->fileService->delete($item->avatar);
                    }
                    $src_path = $this->fileService->upload($data['avatar'], "users_avatar/profile/{$item->user_type}");
                    $data['avatar'] = $src_path;
                } else {
                    // For new users, we need to determine user_type from data or set a default
                    $userType = $data['user_type'] ?? 'student';
                    $src_path = $this->fileService->upload($data['avatar'], "users_avatar/profile/{$userType}");
                    $data['avatar'] = $src_path;
                }
            } else {
                unset($data['avatar']);
            }

            // Call parent method
            return parent::storeOrUpdate($data, $id);
        } catch (\Exception $e) {
            throw $e;
        }
    }


}
