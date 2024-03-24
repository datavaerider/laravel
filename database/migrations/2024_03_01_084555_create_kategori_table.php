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
        Schema::create('kategori', function (Blueprint $table) {
            $table->integer('id_kategori')->autoIncrement();
            $table->string('nama_kategori');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *xs
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kategori');
    }
};
