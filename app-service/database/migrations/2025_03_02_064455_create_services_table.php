<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id_service');
            $table->unsignedInteger('id_kendaraan');
            $table->foreign('id_kendaraan')->references('id_kendaraan')->on('kendaraans');
            $table->unsignedInteger('id_jnsservices');
            $table->foreign('id_jns_service')->references('id_jns_service')->on('jnsservices');
            $table->text('keluhan');
            $table->date('tgl_masuk');
            $table->date('tgl_keluar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
