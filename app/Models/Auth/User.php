<?php

namespace App\Models\Auth;

use App\Models\Rating;
use App\Models\Specialization;
use App\Models\Traits\Uuid;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use App\Models\Auth\Traits\Scope\UserScope;
use App\Models\Auth\Traits\Method\UserMethod;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Auth\Traits\SendUserPasswordReset;
use App\Models\Auth\Traits\Attribute\UserAttribute;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Auth\Traits\Relationship\UserRelationship;

/**
 * Class User.
 */
class User extends Authenticatable
{
    use HasRoles,
        Notifiable,
        SendUserPasswordReset,
        SoftDeletes,
        UserAttribute,
        UserMethod,
        UserRelationship,
        UserScope,
        Uuid;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'avatar_type',
        'avatar_location',
        'password',
        'password_changed_at',
        'active',
        'confirmation_code',
        'confirmed',
        'timezone',
        'last_login_at',
        'last_login_ip',
        'is_specialist',
        'is_man',
        'phone_number',
        'mobile_number',
        'skype',
        'facebook',
        'address',
        'city',
        'latitude',
        'longitude',
        'description'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * @var array
     */
    protected $dates = ['last_login_at', 'deleted_at'];

    /**
     * The dynamic attributes from mutators that should be returned with the user object.
     * @var array
     */
    protected $appends = ['full_name'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'active' => 'boolean',
        'confirmed' => 'boolean',
        'is_man' => 'boolean'
    ];

    public function isSpecialist() {
        return $this->is_specialist;
    }

    public function specializations() {
        return $this->belongsToMany(Specialization::class)->withPivot(['is_main']);
    }

    public function mainSpecialization() {
        return $this->belongsToMany(Specialization::class)->withPivot(['is_main'])->wherePivot('is_main', true)->first();
    }

    public function ratings() {
        return $this->hasMany(Rating::class, 'specialist_id');
    }

    public function givenRatings() {
        return $this->hasMany(Rating::class);
    }

    public function scopeSpecialists($query) {
        return $query->where('is_specialist', true);
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
