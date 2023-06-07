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
        Schema::create('dalternatif', function (Blueprint $table) {
            $table->integer('id_test')->primary();
            $table->string('no_test');
            $table->string('nama', 50);
            $table->string('jk', 5);
            $table->string('asal_sekolah', 70);
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
        Schema::dropIfExists('dalternatif');
    }
};
