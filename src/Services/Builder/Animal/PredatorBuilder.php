<?php

namespace App\Services\Builder\Animal;

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
