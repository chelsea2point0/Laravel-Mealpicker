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
}
