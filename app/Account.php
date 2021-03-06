<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function logs(){
        return $this->morphMany(Log::class, 'logable');
    }
}
