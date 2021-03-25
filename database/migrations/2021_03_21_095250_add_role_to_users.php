<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRoleToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->text('mobile')->nullable();
            $table->text('type')->nullable();
            $table->text('avatar')->nullable();
            $table->text('lat')->nullable();
            $table->text('lang')->nullable();
            $table->text('city_id')->nullable();
            $table->text('device_token')->nullable();
            $table->text('device_type')->nullable();
            $table->text('app_local')->nullable();
            $table->text('verification_code')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
