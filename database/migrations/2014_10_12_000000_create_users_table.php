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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('username')->nullable();
            $table->string('phone')->nullable();
            $table->string('avatar')->nullable();
            $table->string('avatar_path')->nullable();
            $table->string('avatar_dimensions')->nullable();
            $table->string('avatar_type')->nullable();
            $table->string('password')->nullable();
            $table->string('slug')->nullable();
            $table->string('gender')->nullable();
            $table->date('dob')->nullable();
            $table->text('employment')->nullable();
            $table->text('biography')->nullable();
            $table->enum('is_active', array('Y', 'N'))->default('Y');
            $table->enum('is_login', array('Y', 'N'))->default('Y');
            $table->datetime('last_login_at')->nullable();
            $table->string('last_login_ip')->nullable();
            $table->rememberToken();
            $table->timestamp('email_verified_at')->nullable();
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
