<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbMahasiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_mahasiswa', function (Blueprint $table) {
            $table->increments('id_mahasiswa');
            $table->string('nim');
            $table->string('nama_mahasiswa');
            $table->date('tgl_lahir');
            $table->enum('jenis_kelamin', ['laki-laki','perempuan']);
            $table->enum('jalur_masuk',['snmptn','sbmptn','mandiri']);
            $table->integer('id_prodi')->unsigned();
            $table->foreign('id_prodi')->references('id_prodi')->on('tb_prodi')->onDelete('restrict')->onUpdate('cascade');
            $table->integer('id_ukt')->unsigned();
            $table->foreign('id_ukt')->references('id_ukt')->on('tb_ukt')->onDelete('restrict')->onUpdate('cascade');
            $table->enum('status',['aktif','non-aktif']);
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
        Schema::dropIfExists('tb_mahasiswa');
    }
}
