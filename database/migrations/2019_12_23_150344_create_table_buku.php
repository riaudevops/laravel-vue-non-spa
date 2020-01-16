<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBuku extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->bigIncrements('id');
            /**
             * Struktur tabel diambil dari table lama
             */
            $table->string('no_induk_buku')->comment('Nomor buku')->unique();
            $table->string('call_number_1')->nullable();
            $table->string('call_number_2')->nullable();
            $table->string('call_number_3')->nullable();
            $table->string('tajuk_subjek')->nullable();
            $table->string('pengarang')->nullable();
            $table->string('judul')->nullable();
            $table->string('jilid_ke')->nullable();
            $table->string('seri')->nullable();
            $table->string('edisi_ke')->nullable();
            $table->string('cetakan_ke')->nullable();
            $table->string('penerbit')->nullable();
            $table->string('kota_terbit')->nullable();
            $table->string('tahun_terbit')->nullable();
            $table->string('jumlah_halaman')->nullable();
            $table->string('ilustrasi')->nullable();
            $table->string('bibliografi')->nullable();
            $table->string('ISBN')->nullable();
            $table->string('tinggi_buku')->nullable();
            $table->string('diterima_dari')->nullable();
            $table->string('jumlah_eksemplar')->nullable();
            $table->date('selesai_diproses')->nullable();
            /**
             * user and time
             */
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
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
        Schema::dropIfExists('buku');
    }
}
