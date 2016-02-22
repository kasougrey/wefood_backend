<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TableCategory extends Model
{
    public function tables(){
        return $this->hasMany(Table::class);
    }
}
