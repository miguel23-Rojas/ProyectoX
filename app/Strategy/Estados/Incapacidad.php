<?php

namespace App\Strategy\Estados;
use App\Strategy\StrategyFollowInterface;

class Incapacidad implements StrategyFollowInterface
{
    public function getEstadoUsuario()
    {
        return 'incapacidad';
    }
}