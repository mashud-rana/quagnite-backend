<?php

namespace App\Models;

use App\Models\FaqTopic;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FaqEntry extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id',];

    public function topic()
    {
        return $this->belongsTo(FaqTopic::class, 'topic_id');
    }
}
