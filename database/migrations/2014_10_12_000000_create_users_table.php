<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->date('date_of_birth');
            $table->tinyInteger('gender');
            $table->double('annual_income',8,2);
            $table->tinyInteger('occupation');
            $table->tinyInteger('family_type');
            $table->boolean('manglik');
            $table->string('google_id')->nullable();
            $table->string('oauth_type')->nullable();
            $table->tinyInteger('is_admin');
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
};
