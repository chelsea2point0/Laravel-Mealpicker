<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    protected $fillable = [
        'name',
        'minutes',
        'description',
        'instructions',
        'image_path',
        'serves',
        'difficulty'
    ];

    /**
    * The categories that belong to the meal.
    */
   public function categories()
   {
       return $this->belongsToMany('App\Category', 'meal_category');
   }
}
