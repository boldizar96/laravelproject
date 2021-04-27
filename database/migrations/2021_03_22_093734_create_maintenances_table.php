<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaintenancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maintenances', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('machine_id');
            $table->foreign('machine_id')
              ->references('id')
              ->on('machines')->onDelete('cascade');

            $table->unsignedBigInteger('sparePart_id');
            $table->foreign('sparePart_id')
                ->references('id')
                ->on('spare_parts')->onDelete('cascade');
            $table->unsignedBigInteger('repairMan_id');
            $table->foreign('repairMan_id')
                ->references('id')
                ->on('users')->onDelete('cascade');
            $table->date('repair_date');
            $table->unsignedBigInteger('duration(mins)');
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
        Schema::dropIfExists('maintenances');
    }
}
