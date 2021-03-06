<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function logs(){
        return $this->morphMany(Log::class, 'logable');
    }
}
