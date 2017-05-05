<?php

namespace Empire;

/**
 * Class Patrouille
 * @author Yann Le Scouarnec <bunkermaster@gmail.com>
 * @package Empire
 */
class Patrouille
{
    /**
     * @var array
     */
    private $troopers = [];

    /**
     * @param null $uuid
     * @return array
     */
    public function getTroopers($uuid = null): array
    {
        if(!is_null($uuid)){
            return $this->troopers[$uuid];
        }
        return $this->troopers;
    }

    /**
     * @param TrooperInterface $trooper
     * @return $this
     */
    public function addTroopers(TrooperInterface $trooper)
    {
        $this->troopers[$trooper->getUuid()] = $trooper;

        return $this;
    }

    /**
     * @param $uuid
     * @throws \Exception
     */
    public function removeTrooper($uuid)
    {
        if(!isset($this->troopers[$uuid])){
            throw new \Exception("Trooper pas troové");
        }
        unset($this->troopers[$uuid]);
    }

    public function saluer()
    {
        foreach ($this->troopers as $trooper) {
            $trooper->saluer($this);
        }
    }

}