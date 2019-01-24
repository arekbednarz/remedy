<?php
/**
 * Created by PhpStorm.
 * User: bednarza
 * Date: 23/01/2019
 * Time: 09:05
 */

namespace App\Models;


use App\Models\Auth\User;
use App\Scopes\SpecialistScope;

class Specialist extends User
{

    protected $table = 'users';

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new SpecialistScope());
    }

    public function state() {
        return $this->belongsTo(State::class);
    }

    public function specializations() {
        return $this->belongsToMany(Specialization::class, 'specialization_user', 'user_id')->withPivot(['is_main']);
    }

    public function mainSpecialization() {
        return $this->belongsToMany(Specialization::class, 'specialization_user', 'user_id')->withPivot(['is_main'])->wherePivot('is_main', true)->first();
    }

    public function ratings() {
        return $this->hasMany(Rating::class, 'specialist_id');
    }

    public function profilePictureSrc() {
        return "/storage/avatars/".(!empty($this->profile_picture) ? $this->profile_picture : 'no.jpg');
    }

    public function ratingDetails() {
        $ratings = $this->ratings()->selectRaw('rating, count(rating) as count_rating')->groupBy(['rating'])->get();

        $result = ['ratings' => $ratings->pluck('count_rating', 'rating')->toArray()];

        $countReviews = array_sum($result['ratings']);

        $sum = '0';
        $result['percentage'] = [];
        foreach ($result['ratings'] as $rating => $count) {
            $sum += ($rating*$count);
            $result['percentage'][$rating] = number_format((($count*100)/$countReviews), 1);
        }
        $average = number_format(($countReviews ? $sum/$countReviews : 0), 1);

        $result['count_reviews'] = $countReviews;
        $result['average'] = $average;

        return $result;
    }

}