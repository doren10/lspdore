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
        Schema::create('aspirasis', function (Blueprint $table) {
            $table->id();
            $table->string('nik');
            $table->integer('id_kategori')->length(5);
            $table->string('lokasi')->length(50);
            $table->string('keterangan_singkat')->length(20);
            $table->text('keterangan');
            $table->string('image')->nullable();
            $table->enum('status', ['menunggu', 'proses', 'selesai']);
            $table->string('feedback')->length(30);
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
        Schema::dropIfExists('aspirasis');
    }
};
