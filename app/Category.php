<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    /**
    * The meals that belong to the category.
    */
   public function meals()
   {
       return $this->belongsToMany('App\Meal', 'meal_category');
   }
}
