<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMealIngredientPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meal_ingredient', function(Blueprint $table) {
          $table->integer('meal_id')->unsigned();
          $table->integer('ingredient_id')->unsigned();
          $table->integer('quantity');
          $table->string('unit_of_measure');
          $table->timestamps();

          $table->foreign('meal_id')->references('id')->on('meals');
          $table->foreign('ingredient_id')->references('id')->on('ingredients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('meal_ingredient');
    }
}
