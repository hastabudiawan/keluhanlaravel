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
        Schema::create('keluhan', function (Blueprint $table) {
            $table->id();
            $table->string('layanan', 20);
            $table->date('tglkejadian');
            $table->string('namaruangan', 100)->nullable();
            $table->string('namaperawat', 100)->nullable();
            $table->string('namadokter', 100)->nullable();
            $table->integer('rating');
            $table->text('isikeluhan');
            $table->string('nomorwa', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keluhan');
    }
};
