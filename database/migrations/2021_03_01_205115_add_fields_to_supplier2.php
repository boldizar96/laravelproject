<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToSupplier2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier', function (Blueprint $table) {
          $table->id();
          $table->string('company_name');
          $table->string('contact_name');
          $table->string('address');
          $table->string('city');
          $table->string('region');
          $table->string('postal_code');
          $table->string('country');
          $table->string('phone');
          $table->string('email');
          $table->string('website');
          $table->string('vat_number');
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
        Schema::table('supplier', function (Blueprint $table) {
            //
        });
    }
}
