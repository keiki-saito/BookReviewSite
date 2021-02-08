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
            $table->string('name')->comment('ユーザーネーム');
            $table->string('email')->unique()->comment('ユーザーのメールアドレス');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->comment('ユーザーのパスワード');
            $table->text('profile')->nullable()->comment('ユーザーの自己紹介文');
            $table->string('profile_img')->default('')->comment('ユーザーのアイコン画像');
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
