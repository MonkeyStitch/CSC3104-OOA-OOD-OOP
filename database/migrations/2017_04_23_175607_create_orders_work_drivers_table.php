<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersWorkDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_work_drivers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('trunk_id')->unsigned();
            $table->date('joined');
            $table->date('end');
            $table->timestamps();

            $table->index(['user_id', 'trunk_id']);

            $table->foreign('user_id')
                ->references('id')->on('users');

            $table->foreign('trunk_id')
                ->references('trunk_id')->on('trunks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders_work_drivers');
    }
}
