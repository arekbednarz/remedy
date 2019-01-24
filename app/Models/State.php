<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    public function specialists() {
        return $this->hasMany(Specialist::class);
    }
}
