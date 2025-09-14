<?php

namespace App\Services\Common;

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
                try {
                    if ($id) {
                        try {
                            $item = $this->get($id);
                            if ($item->avatar) {
                                try {
                                    
                                    $this->fileService->delete($item->avatar);
                                } catch (\Exception $e) {
                                    $notify[] = ['error', 'Failed to delete the current avatar'];
                                    return redirect()->back()->withNotify($notify);
                                }
                            }
                            $src_path = $this->fileService->upload($data['avatar'], "users_avatar/profile/{$item->user_type}");
                            $data['avatar'] = $src_path;
                        } catch (\Exception $e) {
                            $this->logFlashThrow($e);
                        }
                    }
                } catch (\Exception $e) {
                    $notify[] = ['error', 'Something is Wrong'];

                    return redirect()->back()->withNotify($notify);
                }
            } else {
                unset($data['avatar']);
            }
            // Call parent method
            return parent::storeOrUpdate($data, $id);
        } catch (\Exception $e) {
            $this->logFlashThrow($e);
        }
    }
}
