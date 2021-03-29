<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTourGuidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_guides', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('name',20);
            $table->char('address',50);
            $table->char('nationalID',14);
            $table->enum('gender',['male','famale']);
            $table->string('image',100)->nullable();
            $table->char('rate',3);
            $table->unsignedBigInteger('locID');
            $table->foreign('locID')->references('id')->on('locations');
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
        Schema::dropIfExists('tour_guides');
    }
}
