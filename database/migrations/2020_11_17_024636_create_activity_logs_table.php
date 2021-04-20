<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivityLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_logs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('action_by')->unsigned();
            $table->string('type')->default('unique');
            $table->string('status')->default('unread');
            $table->string('title');
            $table->string('log');

            $table->bigInteger('performed_to')->unsigned()->nullable();
            $table->foreign('action_by')->references('id')->on('users');
            $table->foreign('performed_to')->references('id')->on('users');

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
        Schema::dropIfExists('activity_logs');
    }
}
