<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentos', function (Blueprint $table) {
            $table->id();
            $table->integer('idRequisicion');
            $table->integer('idAspirante');
            $table->string('actaNacimiento',100);
            $table->string('estatusActa',100);
            $table->string('comentarioActa',100);

            $table->string('curriculum',100);
            $table->string('estatusCurriculum',100);
            $table->string('comCurriculum',100);

            $table->string('curp',100);
            $table->string('estatusCurp',100);
            $table->string('comCurp',100);

            $table->string('nss',100);
            $table->string('estatusNss',100);
            $table->string('comNss',100);

            $table->string('estudios',100);
            $table->string('estatusEstudios',100);
            $table->string('comEstudios',100);

            $table->string('domicilio',100);
            $table->string('estatusDomicilio',100);
            $table->string('comDomicilio',100);

            $table->string('cartaRecomendacion',100);
            $table->string('ecartaRecomendacion',100);
            $table->string('ccartaRecomendacion',100);

            $table->string('ine',100);
            $table->string('estatusine',100);
            $table->string('comentariosIne',100);

            $table->string('rfc',100);
            $table->string('estatusRfc',100);
            $table->string('comentariosRfc',100);

            $table->string('medico',100);
            $table->string('estatusMedico',100);
            $table->string('comentariosMedico',100);
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
        Schema::dropIfExists('documentos');
    }
}
