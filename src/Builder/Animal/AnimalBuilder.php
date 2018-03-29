<?php

namespace App\Builder\Animal;

use App\Builder\CreatureBuilder;

abstract class AnimalBuilder extends CreatureBuilder
{
    protected $powerLimits = ['min' => 1, 'max' => 1];

    protected function generatePower()
    {
        return rand($this->powerLimits['min'], $this->powerLimits['max']);
    }
}
