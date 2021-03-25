<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreEstates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estates', function (Blueprint $table) {
            $table->id();
            $table->text('estate_type');
            $table->integer('city_id')->unsigned();
            $table->integer('area_id')->unsigned();
            $table->text('street');
            $table->text('estate_area');
            $table->text('price');
            $table->integer('currency_id')->unsigned();
            $table->text('land_area');
            $table->text('building_area');
            $table->text('building_age');
            $table->text('apartment_area');
            $table->text('apartment_floor');
            $table->text('land_interface');
            $table->text('shop_length_area');
            $table->text('shop_width_area');
            $table->text('room_no');
            $table->text('bathroom_no');
            $table->text('halls_no');
            $table->text('floors_no');
            $table->text('description');
            $table->text('has_garage');
            $table->text('has_well');
            $table->text('has_public_street_view');
            $table->text('has_sea_view');
            $table->text('elementary_schools_no');
            $table->text('preparatory_schools_no');
            $table->text('secondary_schools_no');
            $table->text('kindergarten_no');
            $table->text('pharmacy_no');
            $table->text('mosque_no');
            $table->text('hospital_no');
            $table->text('bakery_no');
            $table->text('mall_no');
            $table->text('is_residential');
            $table->text('is_agricultural');
            $table->text('is_commercial');
            $table->text('is_industrial');
            $table->text('is_taboo');
            $table->text('has_attic');
            $table->text('is_payment_type_cash');
            $table->text('is_payment_type_installment');
            $table->text('is_payment_type_switching');
            $table->text('contact_name');
            $table->text('contact_identity');
            $table->text('contact_mobile1');
            $table->text('contact_mobile2');
            $table->text('lat');
            $table->text('Ing');
            $table->text('estate_media');
            $table->text('neighborhood_media');
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
        Schema::dropIfExists('store_estates');
    }
}
