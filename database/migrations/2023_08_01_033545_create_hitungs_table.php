<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHitungsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hitungs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('nilai_id');
            $table->timestamps();
            $table->double('nilai_vektor');
            $table->double('max_wawancara')->default('0');
            $table->double('normalisasi_wawancara');
            $table->double('vektor_wawancara');
            $table->double('max_latihan')->default('0');
            $table->double('normalisasi_latihan');
            $table->double('vektor_latihan');
            $table->double('max_audisi')->default('0');
            $table->double('normalisasi_audisi');
            $table->double('vektor_audisi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hitungs');
    }
}
