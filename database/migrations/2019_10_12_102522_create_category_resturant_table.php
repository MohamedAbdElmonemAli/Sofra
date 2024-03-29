<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoryResturantTable extends Migration {

	public function up()
	{
		Schema::create('category_resturant', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('category_id')->unsigned()->nullable();
			$table->integer('resturant_id')->unsigned()->nullable();
		});
	}

	public function down()
	{
		Schema::drop('category_resturant');
	}
}