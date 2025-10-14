<?php

namespace App\Services\Api\V1;

use App\Models\DifficultyLevel;
use App\Services\BaseService;
use Illuminate\Database\Eloquent\Model;

class DifficultyService extends BaseService
{
    public function __construct(DifficultyLevel $model)
    {
        parent::__construct($model);
    }


    public function getDifficultyLevels(
        array $selectedFields = ['*'],
        array $withRelations = []
    )
    {
        $request = request();

        $per_page = $request->get('per_page', 10);
        $is_paginate = $request->get('is_paginate', false);

        $relationships = [];

        foreach($withRelations as $relation){
            $relationships[] = $relation;

        }

        $difficulties =  $this->model::query()
            ->with($relationships)
            ->select($selectedFields)
            ->orderBy('id','desc')
            ->when($is_paginate, function ($query) use ($per_page) {
                return $query->paginate($per_page);
            }, function ($query) {
                return $query->get();
            });

        return $difficulties;
    }
}
