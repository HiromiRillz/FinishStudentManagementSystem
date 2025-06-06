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
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert(['id' => 1, 'name' => '山田太郎', 'email' => 'sute1@example.com', 'password' => bcrypt('password')]);
        DB::table('users')->insert(['id' => 2, 'name' => '畠山俊二', 'email' => 'sute2@example.com', 'password' => bcrypt('password')]);
        DB::table('users')->insert(['id' => 3, 'name' => '伊藤あきら', 'email' => 'sute3@example.com', 'password' => bcrypt('password')]);
        DB::table('users')->insert(['id' => 4, 'name' => '財条浩二', 'email' => 'sute4@example.com', 'password' => bcrypt('password'),]);
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
