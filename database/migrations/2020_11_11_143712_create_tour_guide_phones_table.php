<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTourGuidePhonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_guide_phones', function (Blueprint $table) {
            $table->char('phone',11);
            $table->unsignedBigInteger('tourID');
            $table->primary(['phone','tourID']);
            $table->foreign('tourID')->references('id')->on('tour_guides');
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
        Schema::dropIfExists('tour_guide_phones');
    }
}
