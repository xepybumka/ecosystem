<?php


namespace App\Entity\Creatures\Animal;


use App\Entity\Creatures\Creature;

abstract class Animal extends Creature
{
    /**
     * @var int
     */
    private $power = 0;

    /**
     * @return int
     */
    public function getPower()
    {
        return $this->power;
    }

    /**
     * @param int $power
     */
    public function setPower(int $power)
    {
        $this->power = $power;
    }


}