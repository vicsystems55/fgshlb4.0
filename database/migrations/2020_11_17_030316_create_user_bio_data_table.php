<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserBioDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_bio_data', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->string('firstname');
            $table->string('middlename')->nullable();
            $table->string('surname');
            $table->string('state');
            $table->string('lga');
            $table->string('passport');
            $table->string('dob');
            $table->string('service_no');
            $table->string('phone');
            $table->string('res_address');
            $table->string('cur_adress');
            $table->string('status')->default('pending');
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
        Schema::dropIfExists('user_bio_data');
    }
}
