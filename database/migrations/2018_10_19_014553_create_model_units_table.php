<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unit', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_unit'); //membuat column nama_unit
            $table->integer('id_seksyen'); //membuat column id_seksyen

            $table->timestamps();
        });
