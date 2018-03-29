<?php

namespace App\Builder\Animal;

use App\Builder\Animal\AnimalBuilder;
use App\Entity\Creatures\Animal\Herbivore;

class HerbivoreBuilder extends AnimalBuilder
{
    protected $names = [
        'herbivore'
    ];
    protected $powerLimits = ['min' => 1, 'max' => 100];


    public function create()
    {
        $herbivore = new Herbivore();
        $herbivore->setName($this->generateName());
        $herbivore->setPower($this->generatePower());
        return $herbivore;
    }
}
