<?php

namespace App\Models;

use App\Models\Playground;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PlaygroundConfiguration extends Model
{
    use HasFactory;

    protected $guarded = ['id',];

    public function playground()
    {
        return $this->belongsTo(Playground::class);
    }
}
