<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengurus', function (Blueprint $table) {
            $table->id();
             $table->string('no_penduduk',20);
             $table->string('nama',100);
             $table->string('jabatan',25);
             $table->string('jenkel',9);
             $table->string('tempat',30);
             $table->date('tgl_lahir');
             $table->string('agama',15);
             $table->string('pendidikan',10);
             $table->string('pekerjaan',20);
             $table->string('foto',100);
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
        Schema::dropIfExists('pengurus');
    }
}
