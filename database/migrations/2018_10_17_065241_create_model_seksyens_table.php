<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelSeksyensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seksyen', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_seksyen'); //membuat column nama_seksyen
            $table->string('singkatan_seksyen'); //membuat column singkatan_seksyen
            $table->text('alamat_seksyen'); //membuat column alamat_seksyen

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
        Schema::dropIfExists('model_units');
    }
}
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('model_seksyens');
    }
}
