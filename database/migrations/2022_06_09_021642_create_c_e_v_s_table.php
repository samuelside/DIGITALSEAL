<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCEVSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c_e_v_s', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('NomOrga');
            $table->string('IDARTCI'); 
            $table->string('LienDoc');
            $table->integer('NumDoc');      
            $table->string('EmailUsager');
            $table->string('IDdecachet');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('c_e_v_s');
    }
}
