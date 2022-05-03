<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnggotaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggota', function (Blueprint $table) {
            $table->id();
            $table->string('no_penduduk', 20);
            $table->string('nama', 50);
            $table->string('tempat', 30);
            $table->date('tgl_lahir');
            $table->foreignId('kelurahan_id')
                ->constrained('kelurahan')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('agama', 9);
            $table->string('jenkel', 20);
            $table->string('pendidikan', 10);
            $table->string('longitude', 100);
            $table->string('latitude', 100);
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
        Schema::dropIfExists('anggota');
    }
}
