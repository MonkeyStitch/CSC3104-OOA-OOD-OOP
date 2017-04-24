<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrunksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trunks', function (Blueprint $table) {
            $table->increments('trunk_id');
            $table->string('trunk_name', 20);
            $table->string('image');
            $table->string('category_trunk');
            $table->date('join_in');
            $table->double('freight_weight');
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
        Schema::dropIfExists('trunks');
    }
}
