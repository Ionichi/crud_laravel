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
        Schema::create('master_berita', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('master_kategori_id');
            $table->string('judul_berita');
            $table->string('slug')->unique();
            $table->text('excerpt');
            $table->text('isi_berita');
            $table->text('foto');
            $table->timestamp('published_at')->nullable();
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
        Schema::dropIfExists('beritas');
    }
};
