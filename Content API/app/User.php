<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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
     * This mutator automatically hashes the password.
     *
     * @var string
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = \Hash::make($value);
    }
    public function abouts()
    {
        return $this->hasMany('App\Abouts');
    }

    public function skills()
    {
        return $this->hasMany('App\Skills');
    }

    public function tools()
    {
        return $this->hasMany('App\Tools');
    }
    public function languages()
    {
        return $this->hasMany('App\Languages');
    }
    public function espskills()
    {
        return $this->hasMany('App\Espskills');
    }
    public function contacts()
    {
        return $this->hasMany('App\Contacts');
    }
    public function education()
    {
        return $this->hasMany('App\Education');
    }
    public function careers()
    {
        return $this->hasMany('App\Careers');
    }
    public function works()
    {
        return $this->hasMany('App\Works');
    }
    public function projects()
    {
        return $this->hasMany('App\Projects');
    }
    public function awards()
    {
        return $this->hasMany('App\Awards');
    }
    public function achievements()
    {
        return $this->hasMany('App\Achievements');
    }
    public function volunteers()
    {
        return $this->hasMany('App\Volunteers');
    }
    public function casestudies()
    {
        return $this->hasMany('App\Casestudies');
    }
}
