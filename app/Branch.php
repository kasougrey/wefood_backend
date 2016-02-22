<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    public function Application(){
        return $this->belongsToMany(User::class);
    }
}
