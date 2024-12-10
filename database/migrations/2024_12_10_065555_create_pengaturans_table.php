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
        Schema::create('pengaturan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_web');
            $table->text('deskripsi');
            $table->string('logo')->nullable();
            $table->text('alamat');
            $table->string('email');
            $table->string('nomor_telepon');
            $table->string('link_facebook');
            $table->string('link_instagram');
            $table->string('link_tiktok');
            $table->string('nomor_wa');
            $table->string('author');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaturan');
    }
};
