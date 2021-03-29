<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravlTosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travl_tos', function (Blueprint $table) {
            $table->unsignedBigInteger('travID');
            $table->unsignedBigInteger('subLocID');
            $table->primary(['travID', 'subLocID']);  // note, this is a *primary* key
            $table->foreign('travID')->references('id')->on('travel');
            $table->foreign('subLocID')->references('id')->on('sub_locations');
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
        Schema::dropIfExists('travl_tos');
    }
}
