<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ReviewsTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('reviews', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('customer_id')->unsigned();
			$table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
			$table->integer('provider_id')->unsigned();
			$table->foreign('provider_id')->references('id')->on('providers')->onDelete('cascade');
			$table->float('grade');
			$table->longText('review');
			$table->boolean('is_approved');
			$table->timestamps();
		});
		Schema::create('interactions', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name')->unique();
			$table->string('display_name');
			$table->string('description')->nullable();
			$table->timestamps();
		});
		Schema::create('customer_provider', function (Blueprint $table) {
			$table->integer('customer_id')->unsigned();
			$table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
			$table->integer('provider_id')->unsigned();
			$table->foreign('provider_id')->references('id')->on('providers')->onDelete('cascade');
			$table->integer('interaction_type')->unsigned();
			$table->foreign('interaction_type')->references('id')->on('interactions')->onDelete('cascade');
			$table->timestamps();
		});
	}

	/**
	* Reverse the migrations.
	*
	* @return void
	*/
	public function down()
	{
	}
}
