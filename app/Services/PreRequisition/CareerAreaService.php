<?php

namespace App\Services\PreRequisition;

use App\Models\CareerArea;
use \Illuminate\Support\Str;
use App\Services\BaseService;
use App\Constants\GlobalConstant;

class CareerAreaService extends BaseService
{

    protected $model;

    public function __construct()
    {
        $this->model = CareerArea::class;
    }

    public function getBySectionId($section_id, $limit = GlobalConstant::CG_STU_PER_PAGE)
    {
        try {
            return $this->model::where('career_section_id', $section_id)->paginate($limit);
        } catch (\Exception $e) {
            $this->logFlashThrow($e);
        }
    }

    public function storeOrUpdate($data, $id = null)
    {
        try {
            // Load additional data
            $data['slug'] = Str::slug($data['name']);
            // Call parent method
            return parent::storeOrUpdate($data, $id);
        } catch (\Exception $e) {
            $this->logFlashThrow($e);
        }
    }
}
