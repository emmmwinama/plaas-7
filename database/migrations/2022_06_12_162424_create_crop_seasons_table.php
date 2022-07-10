<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCropSeasonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crop_seasons', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->date('schedule_start');
            $table->date('start_date');
            $table->date('schedule_end');
            $table->date('end_date');
            $table->string('description', 1000);
            $table->unsignedBigInteger('crop_id')->index();
            $table->timestamps();

            $table->foreign('crop_id')
                ->references('id')
                ->on('crops')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('crop_seasons');
    }
}
