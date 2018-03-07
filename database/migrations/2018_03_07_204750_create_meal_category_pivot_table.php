<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMealCategoryPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meal_category', function(Blueprint $table) {
          $table->integer('meal_id')->unsigned();
          $table->integer('category_id')->unsigned();
          $table->timestamps();

          $table->foreign('meal_id')->references('id')->on('meals');
          $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('meal_category');
    }
}
