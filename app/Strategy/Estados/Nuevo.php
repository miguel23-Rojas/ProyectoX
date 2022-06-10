<?php

namespace App\Strategy\Estados;
use App\Strategy\StrategyFollowInterface;

class Nuevo implements StrategyFollowInterface
{
    public function getEstadoUsuario()
    {
        return 'usuariosNuevos';
    }
}