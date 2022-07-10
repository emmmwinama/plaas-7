<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYieldersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yielders', function (Blueprint $table) {
            $table->id();
            $table->string('unit');
            $table->string('description');
            $table->float('qty');
            // $table->unsignedBigInteger('crop_id')->index();
            $table->unsignedBigInteger('inventory_item_id')->index();
            $table->unsignedBigInteger('crop_season_id')->index();
            $table->timestamps();

            // $table->foreign('crop_id')
            //     ->references('id')
            //     ->on('crops')
            //     ->onDelete('cascade')
            //     ->onUpdate('cascade');

            $table->foreign('inventory_item_id')
                ->references('id')
                ->on('inventory_items')
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
        Schema::dropIfExists('yielders');
    }
}
