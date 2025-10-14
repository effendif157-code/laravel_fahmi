<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiotadasTable extends Migration
{
    public function up()
    {
        Schema::create('biotadas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->date('tgl_lahir');
            $table->enum('jk', ['L', 'P']); // L = Laki, P = Perempuan, contoh
            $table->string('agama');
            $table->text('alamat');
            $table->integer('tinggi_badan');
            $table->integer('berat_badan');
            $table->string('foto')->nullable(); // menyimpan nama file / path foto
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('biotadas');
    }
}
