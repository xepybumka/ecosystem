<?php

namespace App\Services\Builder\Animal;

use App\Entity\Creatures\Animal\LargePredator;

class LargePredatorBuilder extends AnimalBuilder
{
    protected $names = [
        'largePredator'
    ];
    protected $powerLimits = ['min' => 200, 'max' => 300];


    public function create()
    {
        $largePredator = new LargePredator();
        $largePredator->setName($this->generateName());
        $largePredator->setPower($this->generatePower());
        return $largePredator;
    }
}
