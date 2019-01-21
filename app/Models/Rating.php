<?php

namespace App\Models;

use App\Models\Auth\User;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    public function specialist() {
        return $this->belongsTo(User::class, 'specialist_id');
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
