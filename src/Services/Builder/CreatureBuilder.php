<?php

namespace App\Services\Builder;

abstract class CreatureBuilder
{
    protected $names = ['creature'];

    protected function generateName()
    {
        $number = (int)rand(0, count($this->names) - 1);
        $name = $this->names[$number];
        return $name;
    }

    abstract public function create();
}
