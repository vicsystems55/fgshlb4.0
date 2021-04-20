<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_infos', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('serviceno')->unique()->nullable();
            $table->integer('accountno')->nullable()->unique();
            $table->string('bankname')->nullable();
            $table->string('accountname')->nullable();
            $table->string('phone')->nullable();
            $table->string('category')->nullable();
            $table->string('ministry')->nullable();
            $table->string('parastatal')->nullable();
            $table->string('section')->nullable();
            $table->date('dateOfBirth')->nullable(); //dateofbirth
            $table->string('rank')->nullable();
            $table->string('level')->nullable();
            $table->date('dateOfFirstAppointment')->nullable();
            $table->date('dateOfcurrentAppointment')->nullable();
            $table->string('step')->nullable();
            $table->string('state')->nullable();
            $table->string('lga')->nullable();
            $table->string('pensionable')->nullable();
            $table->string('gazzette')->nullable(); //upload
            $table->string('surety')->nullable();  //upload
            $table->string('photo')->nullable(); //upload
           // $table->string('pensionFundAdmin')->nullable();
            $table->string('pin')->nullable();  // persid (pensionFundAdmin id)
            $table->text('currentAddress')->nullable();   
            $table->text('residentialAddress')->nullable();  
            $table->string('appointmentConfirmation')->nullable();  //upload
            $table->string('payslip')->nullable();  //upload   
            $table->string('fileNO')->nullable();  //auto generated after es confirms
            $table->string('reason')->nullable();  //upload
            $table->bigInteger('user_id')->unsigned(); //upload
            $table->bigInteger('docs_id')->unsigned()->nullable(); //upload
            $table->bigInteger('pension_fund_id')->unsigned()->nullable(); // pension fund table id
            $table->string('pension_commission')->nullable();
            $table->string('pension_no')->nullable();
            $table->string('status')->default('unverified');  //upload
            $table->string('bio_state')->default('pending');  //upload
            $table->string('appoint_state')->default('pending');  //upload
            $table->string('upload_state')->default('pending');  //upload
            $table->string('designation')->nullable();

           // $table->string('parastatal')->nullable();
           
            
            
            $table->foreign('user_id')->references('id')->on('users'); 

            $table->foreign('pension_fund_id')->references('id')->on('pension_funds');

            $table->foreign('docs_id')->references('id')->on('document_uploads'); 

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
        Schema::dropIfExists('personal_infos');
    }
}
