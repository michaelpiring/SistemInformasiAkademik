<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbUkt extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_ukt', function (Blueprint $table) {
            $table->increments('id_ukt');
            $table->enum('minimal_jalur_penerimaan',['snmptn/sbmptn', 'mandiri']);
            $table->date('tanggal_aktif');
            $table->integer('besar_ukt');
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
        Schema::dropIfExists('tb_ukt');
    }
}
