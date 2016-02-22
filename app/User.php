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
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

//    protected $dateFormat = 'U';

    public function branches()
    {
        return $this->belongsToMany(Branch::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function account(){
        return $this->hasOne(Account::class);
    }

    public function orders(){
        return $this->hasMany(Order::class);
    }

}
