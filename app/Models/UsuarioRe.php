<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioRe extends Model
{
    //use HasFactory;
    protected $table = 'usuariorequi';
    protected $primaryKey = 'id';

    protected $fillable = [
        'idRequisicion',
        'idUsuario',
        'idEmpresa'
    ];

    public $timestamps = false;
}