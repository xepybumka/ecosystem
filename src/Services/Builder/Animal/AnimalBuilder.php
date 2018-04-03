<?php

namespace App\Services\Builder\Animal;

use App\Services\Builder\CreatureBuilder;

abstract class AnimalBuilder extends CreatureBuilder
{
    protected $powerLimits = ['min' => 1, 'max' => 1];

    protected function generatePower()
    {
        return rand($this->powerLimits['min'], $this->powerLimits['max']);
    }
}
