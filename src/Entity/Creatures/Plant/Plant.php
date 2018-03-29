<?php


namespace App\Entity\Creatures\Plant;

use App\Entity\Creatures\Creature;

class Plant extends Creature
{
    /**
     * @var int
     */
    private $energy = 0;

    /**
     * @return int
     */
    public function getEnergy()
    {
        return $this->energy;
    }

    /**
     * @param int $energy
     */
    public function setEnergy($energy)
    {
        $this->energy = $energy;
    }
}
