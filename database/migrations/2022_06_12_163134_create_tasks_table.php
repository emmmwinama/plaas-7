<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category');
            $table->string('desription');
            $table->date('schedule_start');
            $table->date('start_date');
            $table->date('schedule_end');
            $table->date('end_date');
            $table->enum('status', ['In Progress', 'Completed', 'Delayed', 'Not Started']);
            $table->enum('target_asset', ['all assets here']);
            $table->unsignedBigInteger('asset');
            $table->unsignedBigInteger('crop_season_id')->index();
            $table->unsignedBigInteger('employee_id');

            $table->foreign('crop_season_id')
                ->references('id')
                ->on('crop_seasons')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('employee_id')
                ->references('id')
                ->on('employees')
                ->onDelete('cascade')
                ->onUpdate('cascade');

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
        Schema::dropIfExists('tasks');
    }
}
