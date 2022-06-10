<?php

namespace App\EstadosValues;

use App\Strategy\Estados\Despedido;
use App\Strategy\Estados\Empleado;
use App\Strategy\Estados\Vacaciones;
use App\Strategy\Estados\Aspirante;
use App\Strategy\Estados\Incapacidad;
use App\Strategy\Estados\Nuevo;

final class ValoresEstado{
    const STRATEGY = [
        'Despedido' => Despedido::class,
        'Empleado' => Empleado::class,
        'Vacaciones' => Vacaciones::class,
        'Incapacidad' => Incapacidad::class,
        'Nuevo' => Nuevo::class
    ];
}