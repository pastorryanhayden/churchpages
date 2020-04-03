<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'church_name'
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

    public function info()
    {
        return $this->hasOne('App\Info');
    }
     public function mission()
    {
        return $this->hasOne('App\Mission');
    }
     public function pastor()
    {
        return $this->hasOne('App\Pastor');
    }
    public function testimonials()
    {
        return $this->hasMany('App\Testimonial');
    }
    public function visit()
    {
        return $this->hasOne('App\Visit');
    }
    public function hero()
    {
        return $this->hasOne('App\Hero');
    }
}
