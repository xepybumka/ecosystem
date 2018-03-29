<?php

namespace App\Builder\Animal;

use App\Builder\Animal\AnimalBuilder;
use App\Entity\Creatures\Animal\Predator;

class PredatorBuilder extends AnimalBuilder
{
    protected $names = [
        'predator'
    ];

    protected $powerLimits = ['min' => 100, 'max' => 200];

    public function create()
    {
        $predator = new Predator();
        $predator->setName($this->generateName());
        $predator->setPower($this->generatePower());
        return $predator;
    }
}
