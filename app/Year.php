<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    public function books(){
        return $this->hasMany('App\Book');
    }

    public function getYears()
    {
        $years = Year::orderBy('id','asc')->pluck('year','id');

        return $years;
    }
}
