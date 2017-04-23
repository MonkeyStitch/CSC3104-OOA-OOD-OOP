<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'permission',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    protected $appends = [
//        'is_owner',
//        'is_members',
//        'is_drivers',
//        'is_others',
    ];

    protected $casts = [
//        'is_owner' => 'boolean',
//        'is_members' => 'boolean',
//        'is_drivers' => 'boolean',
//        'is_others' => 'boolean',
    ];


    public function getIsOwnerAttribute()
    {
//        return $this->attributes['permission'];
        return $this->attributes['permission'] === 'OWNER';
    }

    public function getIsMembersAttribute()
    {
        return $this->attributes['permission'] === 'MEMBER';
    }

    public function getIsDriversAttribute()
    {
        return $this->attributes['permission'] === 'DRIVER';
    }

    public function getIsOthersAttribute()
    {
        return $this->attributes['permission'] === 'OTHERS';
    }
}
