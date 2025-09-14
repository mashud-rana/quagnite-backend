<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Traits\HandlesBulkActions;
use Illuminate\Http\Request;

class BulkActionController extends Controller
{
    use HandlesBulkActions;

    public function bulkAction(Request $request, $model)
    {
        $namespaces = [
            'App\\Models\\',
            'Spatie\\Permission\\Models\\',
        ];

        // Iterate through namespaces
        $modelClass = null;
        foreach ($namespaces as $namespace) {
            $fullClassName = $namespace.ucfirst($model);
            if (class_exists($fullClassName)) {
                $modelClass = $fullClassName;
                break;
            }
        }

        // If the model class was not found
        if (! $modelClass) {
            return redirect()->back()->with('error', 'Invalid model.');
        }

        // Use the trait method to handle the bulk action
        return $this->handleBulkAction($request, new $modelClass);
    }
}
