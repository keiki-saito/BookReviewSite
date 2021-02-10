<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\BookMark;
use Illuminate\Support\Facades\Auth;
class Book extends Model
{
    public function year(){
        return $this->belongsTo('App\Year');
    }

    public function reviews(){
        return $this->hasMany('App\Review');
    }
    public function bookMarks(){
        return $this->hasMany('App\BookMark');
    }

    public function scopeYearAt($query,$year_id)
    {
        if(empty($year_id)){
            return;
        }

        return $query->where('year_id',$year_id);
    }

    public function scopeSearchTitle($query,$searchWord)
    {
        if(empty($searchWord)){
            return;
        }

        return $query->where('title','like',"%{$searchWord}%");
    }


    public function bookmark_by()
    {
      return BookMark::where('user_id', Auth::user()->id)->first();
    }
}
