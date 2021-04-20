<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationStagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('application_stages', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('personalinfo_id')->unsigned();
            $table->string('stage');
            $table->string('description');
            $table->string('status')->default('active');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('personalinfo_id')->references('id')->on('personal_infos');
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
        Schema::dropIfExists('application_stages');
    }
}
