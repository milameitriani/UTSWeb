<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePanensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() 
    {
        Schema::create('panen', function (Blueprint $table) {
            $table->id('panenID');
            $table->foreignid('produksID');
            $table->foreignid('id_kelompok_tani');
            $table->foreignid('user_id');
            $table->date('perkiraanpanenDate');
            $table->date('perkiraanpanenJumlah');
            $table->date('panenDate');
            $table->double('panenJumlah');
            $table->string('satuan');
           

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
        Schema::dropIfExists('hasil_panens');
    }
}
