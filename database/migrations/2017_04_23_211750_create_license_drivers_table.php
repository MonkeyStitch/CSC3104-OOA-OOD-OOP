<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLicenseDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('license_drivers', function (Blueprint $table) {
            $table->increments('license_id');
            $table->integer('user_id')->unsigned();
            $table->string('type');
            $table->string('category');
            $table->date('issue');
            $table->date('expiry');
            $table->timestamps();

            $table->index('user_id');

            $table->foreign('user_id')
                ->references('id')->on('users')
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
        Schema::dropIfExists('license_drivers');
    }
}
