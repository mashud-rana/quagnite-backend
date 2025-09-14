<?php

namespace App\Services\Event;

use App\Models\Event;
use App\Services\BaseService;
use App\Services\Utils\FileService;
use Illuminate\Support\Facades\DB;

class EventService extends BaseService
{
    protected $model;

    protected $fileService;

    public function __construct(FileService $fileService)
    {
        $this->model = Event::class;
        $this->fileService = $fileService;
    }

    public function getEventById($id)
    {
        return Event::findOrFail($id);
    }

    public function storeOrUpdate($data, $id = null)
    {
        try {
            // Start a transaction
            DB::beginTransaction();

            // Handle image upload if present
            if (isset($data['image'])) {
                $data['image'] = $this->handleImageUpload($data['image'], $id);
            }

            // Store or update the event
            $event = $id ? $this->get($id) : new Event();
            $event->fill($data);
            $event->save();

            // Handle speaker assignment
            if (isset($data['speakers']) && is_array($data['speakers'])) {
                $event->speakers()->sync($data['speakers']);
            }

            // Commit the transaction
            DB::commit();

            return $event;
        } catch (\Exception $e) {
            // Rollback the transaction
            DB::rollBack();
            $this->logFlashThrow($e);
            throw $e;
        }
    }

    /**
     * Handle image upload logic.
     *
     * @param  mixed  $image
     * @param  int|null  $id
     * @return string|null
     */
    private function handleImageUpload($image, $id = null)
    {
        try {
            if ($id) {
                $item = $this->get($id);
                if ($item->image) {
                    $this->fileService->delete($item->image);
                }
            }

            return $this->fileService->upload($image, 'events/event/');
        } catch (\Exception $e) {
            $this->logFlashThrow($e);
            throw new \Exception('Failed to upload image.');
        }
    }

    public function deleteEvent($id)
    {
        try {
            $event = $this->getEventById($id);

            if ($event->image) {
                try {
                    $this->fileService->delete($event->image);
                } catch (\Exception $e) {
                    log_error($e);
                }
            }

            return $event->delete();
        } catch (\Exception $e) {
            log_error($e);
            $this->logFlashThrow($e);
        }
    }
}
