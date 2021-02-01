<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
     protected $fillable = [
        'name', 'photo', 
    ];
     public function subcateogries()
    {
        return $this->hasMany('App\Subcateogry');
    }
    public function items()
  {
    return $this->hasManyThrough('App\Item', 'App\Subcategory');
  }
}