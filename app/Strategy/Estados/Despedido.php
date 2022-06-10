<?php

namespace App\Strategy\Estados;
use App\Strategy\StrategyFollowInterface;

class Despedido implements StrategyFollowInterface
{
    public function getEstadoUsuario()
    {
        return 'usuariosNuevos';
    }
}