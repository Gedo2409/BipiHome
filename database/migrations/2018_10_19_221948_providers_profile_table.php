<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProvidersProfileTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('providers', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			$table->string('logo_path')->nullable();
			$table->string('description')->nullable();
			$table->boolean('active')->default(false);
			$table->string('phone');
			$table->string('name')->nullable();
			$table->string('street')->nullable();
			$table->string('neighborhood')->nullable();
			$table->string('city')->nullable();
			$table->string('postal_code')->nullable();
			$table->timestamps();
		});
		Schema::create('subscription_types', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name')->unique();
			$table->string('display_name')->nullable();
			$table->string('description', 512)->nullable();
			$table->timestamps();
		});
		Schema::create('subscriptions', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('provider_id')->unsigned();
			$table->foreign('provider_id')->references('id')->on('providers')->onDelete('cascade');
			$table->integer('subscription_type_id')->unsigned();
			$table->foreign('subscription_type_id')->references('id')->on('subscription_types')->onDelete('cascade');
			$table->date('subscription_start')->nullable();
			$table->date('subscription_end')->nullable();
			$table->boolean('autorenew');
			$table->timestamps();
		});
		Schema::create('pics', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('provider_id')->unsigned();
			$table->foreign('provider_id')->references('id')->on('providers')->onUpdate('cascade')->onDelete('cascade');
			$table->string('path');
			$table->string('description')->nullable();
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
