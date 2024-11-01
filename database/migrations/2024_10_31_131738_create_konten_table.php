<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('konten', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_menu')->constrained('menu')->onDelete('cascade'); // Relasi ke tabel menu
            $table->string('judul');
            $table->text('deskripsi')->nullable();
            $table->string('file')->nullable(); // File PDF atau Gambar
            $table->enum('jenis_file', ['pdf', 'image', 'url']); // Tipe file atau URL
            $table->date('tanggal')->nullable();
            $table->string('link_konten')->nullable(); // Untuk jenis file URL
            $table->string('pembuat')->nullable();
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
        Schema::dropIfExists('konten');
    }
};
