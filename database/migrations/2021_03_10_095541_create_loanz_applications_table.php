<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoanzApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loanz_applications', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('loan_type_id')->unsigned();
            $table->string('loan_type');
            $table->string('amount');
            $table->string('status')->default('pending');
            $table->bigInteger('deskofficer_id')->unsigned()->nullable();
            $table->bigInteger('repayment_schedule')->unsigned()->nullable();
            $table->string('approval_box')->default('0');
            $table->string('payment_approval_box')->default('0');
            $table->string('payment_approval_list')->default('0');
            $table->string('checking')->default('0');
            $table->string('audit')->default('0');
            
           
            $table->foreign('loan_type_id')->references('id')->on('loan_types');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('deskofficer_id')->references('id')->on('users');

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
        Schema::dropIfExists('loanz_applications');
    }
}
