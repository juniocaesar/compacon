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
        Schema::create('kas_kecil', function (Blueprint $table) {
            $table->string('no', 18)->primary();
            $table->string('no_bukti', 50);
            $table->timestamp('tanggal')->nullable();
            $table->string('keterangan', 50);
            $table->decimal('debit', $precision = 15, $scale = 2);
            $table->decimal('kredit', $precision = 15, $scale = 2);
            $table->decimal('saldo', $precision = 15, $scale = 2);
            $table->string('no_akun', 7);
            $table->string('nama_akun', 50);
            $table->boolean('is_active')->default(true);
            $table->string('created_by', 50);
            $table->string('updated_by', 50);
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
        Schema::dropIfExists('kas_kecil');
    }
};
