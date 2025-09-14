<?php

namespace App\Services\Faq;

use App\Models\FaqTopic;
use Illuminate\Support\Str;
use App\Services\BaseService;

class FaqTopicService extends BaseService
{
    protected $model;

    public function __construct()
    {
        $this->model = FaqTopic::class;
    }

    public function storeOrUpdate($data, $id = null)
    {
        $slug = Str::slug($data['name']);
        $uniqueSlug = $slug;

        $count = 2;
        while (FaqTopic::where('slug', $uniqueSlug)->where('id', '!=', $id)->exists()) {
            $uniqueSlug = $slug . '-' . $count;
            $count++;
        }
        $data['slug'] = $uniqueSlug;
        try {
            // Call parent method
            return parent::storeOrUpdate($data, $id);
        } catch (\Exception $e) {
            $this->logFlashThrow($e);
        }
    }
}
