<?php

namespace App;

use App\Models\Country;
use App\Models\Subscription;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    protected $fillable = [
        'name',
        'type',
        'status',
        'email',
        'email_verified_at',
        'last_login_at',
        'password',
        'remember_token',
        'office_number',
        'company_name',
        'mobile_number',
        'address',
        'country_id',
        'vat_number',
        'unique_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function country(){
        return $this->belongsTo(Country::class);
    }

    public function subscription(){
        return $this->hasOne(Subscription::class);
    }
}
