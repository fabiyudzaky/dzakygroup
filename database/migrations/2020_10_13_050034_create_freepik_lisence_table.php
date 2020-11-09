<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFreepikLisenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('freepik_lisence', function (Blueprint $table) {
            $table->id();
            $table->string('nama_freepik_lisence');
            $table->string('gambar_freepik_lisence');
            $table->string('pdf_freepik_lisence');
            $table->string('attribute_freepik_lisence');
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
        Schema::dropIfExists('freepik_lisence');
    }
}
