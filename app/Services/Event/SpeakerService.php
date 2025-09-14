<?php

namespace App\Services\Event;

use App\Models\Speaker;
use Illuminate\Support\Str;
use App\Services\BaseService;
use App\Services\Utils\FileService;

class SpeakerService extends BaseService
{
    protected $model;
    protected $fileService;

    public function __construct(FileService $fileService)
    {
        $this->model = Speaker::class;
        $this->fileService = $fileService;
    }

    public function storeOrUpdate($data, $id = null)
    {
        $uuid = Str::uuid()->toString();
        $data['uuid'] = $uuid;
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
                            $src_path = $this->fileService->upload($data['avatar'], "events/speaker/");
                            $data['avatar'] = $src_path;
                        } catch (\Exception $e) {
                            $this->logFlashThrow($e);
                        }
                    } else {
                        $src_path = $this->fileService->upload($data['avatar'], "events/speaker/");
                        $data['avatar'] = $src_path;
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
