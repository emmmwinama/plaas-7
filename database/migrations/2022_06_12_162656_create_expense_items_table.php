<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpenseItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expense_items', function (Blueprint $table) {
            $table->id();
            $table->float('cost');
            $table->integer('qty');
            $table->float('line-total');
            $table->unsignedBigInteger('expense_id')->index();
            $table->unsignedBigInteger('inventory_item_id')->index();
            $table->timestamps();

            $table->foreign('expense_id')
                ->references('id')
                ->on('expenses')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('inventory_item_id')
                ->references('id')
                ->on('inventory_items')
                ->onUpdate('cascade')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expense_items');
    }
}
