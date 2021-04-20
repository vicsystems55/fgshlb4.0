<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('firstname');
            $table->string('middlename')->nullable();
            $table->string('surname');
            $table->string('role')->default('Applicant');
            $table->string('type')->default('standard');
            $table->string('status')->default('verified');
            $table->string('designation')->nullable();
            //new field
            $table->string('deskoffice')->default('pending')->nullable();
            $table->string('shortlistedby')->default('pending')->nullable();

            //new field
            $table->string('email')->unique();
            $table->string('avatar')->default('avatar.png');
            $table->string('req2fa')->default('no');
            $table->string('file_no')->unique();
            $table->string('nin')->unique()->nullable();
            $table->string('work_place')->nullable();
            $table->string('ippis_no')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
