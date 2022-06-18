<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificates', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Pays');
            $table->string('Nom_Orga');
            $table->string('email_server');
            $table->string('Numero_serie');
            $table->string('DteOrigin');
            $table->string('Dtefin');
            $table->timestamp('email_verified_at')->nullable();

          
        
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('certificates');
    }
}
