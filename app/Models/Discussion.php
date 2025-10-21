<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Discussion extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id',];

    public function discussionable()
    {
        return $this->morphTo();
    }

    public function comments()
    {
        return $this->hasMany(DiscussionComment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getCreatedAtAttribute($value)
    {
        return days_ago_from_now($value);
    }
    public function votes()
    {
        return $this->morphMany(Vote::class, 'votable');
    }

    public function helpful_votes()
    {
        return $this->votes()->where('type', 'helpful');

    }

    public function unhelpful_votes()
    {
        return $this->votes()->where('type', 'unhelpful');
    }

    public function my_vote()
    {
        return $this->morphOne(Vote::class, 'votable')->where('user_id', auth()->id());
    }

}
