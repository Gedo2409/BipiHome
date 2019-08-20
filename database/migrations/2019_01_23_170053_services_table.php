<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ServicesTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('services', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('provider_id')->unsigned()->nullable();
			$table->foreign('provider_id')->references('id')->on('providers')->onDelete('cascade');
			$table->float('price')->nullable();
			$table->string('name')->unique();
			$table->string('display_name');
			$table->string('description')->nullable();
			$table->timestamps();
		});
		Schema::create('categories', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name')->unique();
			$table->string('display_name');
			$table->string('description')->nullable();
			$table->string('icon')->nullable();
			$table->timestamps();
		});
		Schema::create('customer_service', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('service_id')->unsigned()->nullable();
			$table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
			$table->integer('customer_id')->unsigned()->nullable();
			$table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
			$table->timestamps();
		});
		Schema::create('conditions', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name')->unique();
			$table->string('display_name');
			$table->string('description')->nullable();
			$table->string('icon')->nullable();
			$table->timestamps();
		});
		Schema::create('condition_provider', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('condition_id')->unsigned()->nullable();
			$table->foreign('condition_id')->references('id')->on('conditions')->onDelete('cascade');
			$table->integer('provider_id')->unsigned()->nullable();
			$table->foreign('provider_id')->references('id')->on('providers')->onDelete('cascade');
			$table->timestamps();
		});
		Schema::table('providers', function (Blueprint $table) {
			$table->integer('category_id')->unsigned()->nullable();
			$table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
		});
		Schema::table('subscription_types', function (Blueprint $table) {
			$table->float('price')->unsigned()->nullable();
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
