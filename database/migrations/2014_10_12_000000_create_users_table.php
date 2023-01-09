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
            $table->string('nik')->default('null');
            $table->string('name')->default('null');
            $table->string('jenis_kelamin')->default('null');
            $table->string('nomor_rekening')->default('null');
            $table->string('tgl_lahir')->default('null');
            $table->string('email')->unique()->default('null');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('no_hp')->default('null');
            $table->string('alamat')->default('null');
            $table->string('pekerjaan')->default('null');
            $table->string('penghasilan')->default('null');
            $table->string('status')->default('null');
            $table->string('username')->default('null');
            $table->string('password')->default('null');
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
