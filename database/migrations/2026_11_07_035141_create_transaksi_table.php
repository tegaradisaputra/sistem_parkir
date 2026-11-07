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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();

            $table->foreignId('id_kendaraan')->constrained('kendaraan')->cascadeOnDelete()->cascadeOnUpdate();

            $table->dateTime('waktu_masuk');
            $table->dateTime('waktu_keluar')->nullable();

            $table->foreignId('id_tarif')->constrained('tarif')->cascadeOnDelete()->cascadeOnUpdate();

            $table->integer('durasi_jam');
            $table->decimal('biaya_total');
            $table->enum('status', ['masuk', 'keluar']);

            $table->foreignId('id_user')->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('id_area_parkir')->constrained('area_parkir')->cascadeOnDelete()->cascadeOnUpdate();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
