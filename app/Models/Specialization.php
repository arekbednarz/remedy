<?php

namespace App\Models;

use App\Models\Auth\User;
use Illuminate\Database\Eloquent\Model;

class Specialization extends Model
{
    public function users() {
        return $this->belongsToMany(User::class);
    }
}
