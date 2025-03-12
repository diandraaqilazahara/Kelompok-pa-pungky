<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kendaraans', function (Blueprint $table) {
            $table->increments('id_kendaraans');
            $table->bigInteger('id_jenis_kendaraan');
            $table->bigInteger('id_pemilik');
            $table->string('no_pol')->default(10);
            $table->string('tahun_kendaraans')->default(4);
            $table->string('no_mesin')->unique(12);
            $table->string('no_rangka')->unique(17);
            $table->string('kapasitas_mesin')->default(4);
            $table->string('transmisi')->default(20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kendaraans');
    }
};
