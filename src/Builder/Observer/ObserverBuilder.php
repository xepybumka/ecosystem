<?php

namespace App\Builder\Observer;

use App\Builder\CreatureBuilder;
use App\Entity\Creatures\Observer\Observer;


class ObserverBuilder extends CreatureBuilder
{
    protected $names = ['observer'];

    public function create ()
    {
        $observer = new Observer();
        $observer->setName($this->generateName());
        return $observer;
    }
}