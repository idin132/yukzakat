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
        Schema::create('mustahiq', function (Blueprint $table) {
            $table->id();
            $table->string('nik');
            $table->string('nama_mustahiq');
            $table->string('jenis_kelamin');
            $table->string('tgl_lahir');
            $table->string('alamat');
            $table->string('agama');
            $table->string('pekerjaan');
            $table->string('penghasilan');
            $table->string('jumlah_anak');
            $table->string('ashnaf');
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
        Schema::dropIfExists('mustahiqs');
    }
};
