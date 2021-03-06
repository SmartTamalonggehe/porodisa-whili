<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistrikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distrik', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kota_id')
                ->constrained('kota')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('nm_distrik', 30);
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
        Schema::dropIfExists('distrik');
    }
}
