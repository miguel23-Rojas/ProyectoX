<?php

namespace App\Strategy\Estados;
use App\Strategy\StrategyFollowInterface;

class Aspirante implements StrategyFollowInterface
{
    public function getEstadoUsuario()
    {
        return 'usuario';
    }
}