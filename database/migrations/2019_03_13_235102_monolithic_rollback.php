<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MonolithicRollback extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('provider_clicks');
        Schema::dropIfExists('category_clicks');
        Schema::dropIfExists('condition_provider');
        Schema::dropIfExists('customer_service');
        Schema::dropIfExists('customer_provider');
        Schema::dropIfExists('subscriptions');
        Schema::dropIfExists('interactions');
        Schema::dropIfExists('role_user');
        Schema::dropIfExists('permission_role');
        Schema::dropIfExists('services');
        Schema::dropIfExists('conditions');
        Schema::dropIfExists('reviews');
        Schema::dropIfExists('customers');
        Schema::dropIfExists('pics');
        Schema::dropIfExists('banners');
        Schema::dropIfExists('subscription_types');
        Schema::dropIfExists('permissions');
        Schema::dropIfExists('roles');
        Schema::dropIfExists('users');
        Schema::dropIfExists('providers');
        Schema::dropIfExists('categories');
        Schema::enableForeignKeyConstraints();
    }
}
