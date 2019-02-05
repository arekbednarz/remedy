<?php

namespace App\Models;

use App\Models\Auth\User;
use Illuminate\Database\Eloquent\Model;

class Favourite extends Model
{
    public function specialists() {
        return $this->belongsTo(Specialist::class, 'specialist_id');
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
