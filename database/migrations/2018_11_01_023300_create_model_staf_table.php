<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelStafTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staf', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_staf'); //membuat column nama_staf
            $table->string('no_kp'); //membuat column nama_staf
            $table->string('nama_jawatan'); //membuat column nama_staf
            $table->string('gred_jawatan'); //membuat column nama_staf
            $table->integer('id_unit'); //membuat column nama_staf
            $table->integer('id_seksyen'); //membuat column nama_staf
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
        Schema::dropIfExists('staf');
    }
}
