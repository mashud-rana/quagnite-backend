<?php

namespace App\Services\Playground;

use App\Models\Playground;
use App\Services\BaseService;
use App\Services\Utils\FileService;

class PlaygroundManageService extends BaseService
{
    protected $model;
    protected $fileService;

    public function __construct(FileService $fileService)
    {
        $this->model = Playground::class;
        $this->fileService = $fileService;
    }

    public function storeOrUpdate($data, $id = null)
    {

        try {
            if (isset($data['image']) && $data['image'] != null) {
                try {
                    if ($id) {
                        try {
                            $item = $this->get($id);
                            if ($item->image) {
                                try {

                                    $this->fileService->delete($item->image);
                                } catch (\Exception $e) {
                                    $notify[] = ['error', 'Failed to delete the current image'];
                                    return redirect()->back()->withNotify($notify);
                                }
                            }
                            $src_path = $this->fileService->upload($data['image'], "playground/");
                            $data['image'] = $src_path;
                        } catch (\Exception $e) {
                            $this->logFlashThrow($e);
                        }
                    } else {
                        $src_path = $this->fileService->upload($data['image'], "playground/");
                        $data['image'] = $src_path;
                    }
                } catch (\Exception $e) {
                    $notify[] = ['error', 'Something is Wrong'];

                    return redirect()->back()->withNotify($notify);
                }
            } else {
                unset($data['image']);
            }
            // Call parent method
            return parent::storeOrUpdate($data, $id);
        } catch (\Exception $e) {
            $this->logFlashThrow($e);
        }
    }
}
