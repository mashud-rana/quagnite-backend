<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Chatify\Traits\UUID;

class ChMessage extends Model
{
    use UUID;

    public function fromUser()
    {
        return $this->hasOne(User::class, 'id', 'from_id')->select(['id', 'first_name', 'email', 'avatar', 'storage_type']);
    }
}
