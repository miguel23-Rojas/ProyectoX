<?php

namespace App\Strategy\Estados;
use App\Strategy\StrategyFollowInterface;

class Vacaciones implements StrategyFollowInterface
{
    public function getEstadoUsuario()
    {
        return 'vacaciones';
    }
}