<?php

namespace App\Services\Builder\Plant;

use App\Services\Builder\CreatureBuilder;
use App\Entity\Creatures\Plant\Plant;

class PlantBuilder extends CreatureBuilder
{
    protected $names = ['plant'];
    protected $energyLimits = ['min' => 1, 'max' => 100];

    public function create ()
    {
        $plant = new Plant();
        $plant->setName($this->generateName());
        $plant->setEnergy($this->generateEnergy());
        return $plant;
    }

    private function generateEnergy()
    {
        return rand($this->energyLimits['min'], $this->energyLimits['max']);
    }
}
