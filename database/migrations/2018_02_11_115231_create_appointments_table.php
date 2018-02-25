<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->increments('id');
            //$table->integer('doctor_id')->unsigned();
            $table->boolean('has_occured');
            $table->string('patient_name');
            $table->dateTime('time_from');
            $table->dateTime('time_to');
            $table->timestamps();
        });
        Schema::table('appointments', function (Blueprint $table){
            $table->integer('doctor_id')->unsigned();

            $table->foreign('doctor_id')->references('id')->on('doctors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointments');
    }
}
