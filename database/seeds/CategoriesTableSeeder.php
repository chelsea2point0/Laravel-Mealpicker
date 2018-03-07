<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            "breakfast",
            "lunch",
            "dinner",
            "snack",
            "dessert",
            "gluten-free",
            "vegetarian",
            "vegan",
            "nut-free",
            "paleo",
            "whole30",
            "diabetic friendly",
            "lactose-free",
            "quick",
            "healthy"
        );

        foreach ($data as $item) {
            $category =  new \App\Category;
            $category->name = $item;
            $category->save();
        }
    }
}
