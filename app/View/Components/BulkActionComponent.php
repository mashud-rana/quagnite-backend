<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BulkActionComponent extends Component
{
    public $model;

    public $statusField;

    public $actions;

    public $statuses;

    public function __construct($model, $statusField, $actions = ['delete'], $statuses = [])
    {
        $this->model = $model;
        $this->statusField = $statusField;
        $this->actions = $actions;
        $this->statuses = $statuses;
    }

    public function render()
    {
        return view('admin.layouts.partials.bulk-action');
    }
}
