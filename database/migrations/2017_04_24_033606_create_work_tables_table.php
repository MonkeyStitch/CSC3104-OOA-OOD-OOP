<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_tables', function (Blueprint $table) {
            $table->increments('work_id');
            $table->date('date_send');
            $table->date('date_submit');
            $table->string('sugar_from');
            $table->integer('user_id')->unsigned();
            $table->integer('trunk_id')->unsigned();
            $table->double('weight_trunk');
            $table->double('weight_fright');
            $table->double('weight_all');
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
        Schema::dropIfExists('work_tables');
    }
}
