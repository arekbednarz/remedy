<?php
/**
 * Created by PhpStorm.
 * User: bednarza
 * Date: 23/01/2019
 * Time: 09:03
 */

namespace App\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class SpecialistScope implements Scope
{

    public function apply(Builder $builder, Model $model)
    {
        $builder->where('is_specialist', true);
    }

}