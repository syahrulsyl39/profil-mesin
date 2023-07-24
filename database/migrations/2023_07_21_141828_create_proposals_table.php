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
        Schema::create('proposals', function (Blueprint $table) {
            $table->id();
            $table->string("npm");
            $table->string("judul");
            $table->string("latar_belakang");
            $table->string("tujuan_penelitian");
            $table->string("manfaat_penelitian");
            $table->text("penelitian_terkait");
            $table->string("pembimbing1");
            $table->string("pembimbing2");
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
        Schema::dropIfExists('proposals');
    }
};
