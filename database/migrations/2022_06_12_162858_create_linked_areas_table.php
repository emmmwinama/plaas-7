<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLinkedAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('linked_areas', function (Blueprint $table) {
            $table->id();
            $table->float('area');
            $table->enum('production_type', ['organic', 'inorganic']);
            $table->unsignedBigInteger('crop_season_id')->index();
            $table->unsignedBigInteger('field_id')->index();
            $table->string('description');
            $table->timestamps();

            $table->foreign('crop_season_id')
                ->references('id')
                ->on('crop_seasons')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('field_id')
                ->references('id')
                ->on('fields')
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
        Schema::dropIfExists('linked_areas');
    }
}
