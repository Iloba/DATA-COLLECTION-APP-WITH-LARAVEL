<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('username')->unique();
            $table->string('reg_number')->unique();
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->boolean('email_verified');
            $table->string('password');
            //More Fields to be updated in dashboard Panel
            $table->string('passport')->nullable();
            $table->string('gender')->nullable();
            $table->string('dob')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('address')->nullable();
            $table->text('essay')->nullable();
            $table->boolean('submitted')->nullable();
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
