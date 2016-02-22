<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    public function logs(){
        return $this->morphMany(Log::class, 'logable');
    }

    public function category(){
        return $this->belongsTo(TableCategory::class,'table_category_id');
    }

    public function branch(){
        return $this->belongsTo(Branch::class);
    }

}
