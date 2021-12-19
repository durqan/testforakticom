<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('name');
            $table->string('level_1');
            $table->string('level_2');
            $table->string('level_3');
            $table->string('price');
            $table->string('price_sp');
            $table->string('property_fields');
            $table->string('joint_purchases', 1400);
            $table->string('unit_of_measurement');
            $table->string('picture');
            $table->string('display_on_the_main_page');
            $table->string('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
