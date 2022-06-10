<?php

namespace App\Strategy\Estados;
use App\Strategy\StrategyFollowInterface;

class Empleado implements StrategyFollowInterface
{
    public function getEstadoUsuario()
    {
        return 'trabajo';
    }
}