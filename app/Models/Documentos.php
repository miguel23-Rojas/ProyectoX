<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documentos extends Model
{
    //use HasFactory;
    protected $table = 'documentos';
    protected $primaryKey = 'id';

    protected $fillable = [
        'idRequisicion',
        'idAspirante',
        'actaNacimiento',
        'estatusActa',
        'comentarioActa',
        'curriculum',
        'estatusCurriculum',
        'comCurriculum',
        'curp',
        'estatusCurp',
        'comCurp',
        'nss',
        'estatusNss',
        'comNss',
        'estudios',
        'estatusEstudios',
        'comEstudios',
        'domicilio',
        'estatusDomicilio',
        'comDomicilio',
        'cartaRecomendacion',
        'ecartaRecomendacion',
        'ccartaRecomendacion',
        'ine',
        'estatusine',
        'comentariosIne',
        'rfc',
        'estatusRfc',
        'comentariosRfc',
        'medico',
        'estatusMedico',
        'comentariosMedico'
    ];

    public $timestamps = false;
}
