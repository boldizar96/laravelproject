<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMachinesSparePartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('machines_spare_parts', function (Blueprint $table) {
            $table->id();
            $table->string('machine_id');
            $table->foreign('machine_id')
              ->references('id')
              ->on('machines')->onDelete('cascade');
            
            $table->string('sparePart_id');
            $table->foreign('sparePart_id')
                ->references('id')
                ->on('spare_parts')->onDelete('cascade');
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
        Schema::dropIfExists('machines_spare_parts');
    }
}
