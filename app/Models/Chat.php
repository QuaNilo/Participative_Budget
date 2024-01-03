<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chat extends Model
{
    use HasFactory;

    public function sender()
    {
        return $this->hasOne(User::class, 'user_id');
    }

    public function receiver()
    {
        return $this->hasOne(User::class, 'user_id');
    }
}
