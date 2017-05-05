<?php

namespace Wanagaine;

use Empire\{
    Stormtrooper, TrooperInterface, Patrouille
};

/**
 * Class ImperialGuard
 * @author Yann Le Scouarnec <bunkermaster@gmail.com>
 * @package Empire
 */
class ImperialGuard extends Stormtrooper
{
    public function saluer(Patrouille $patrouille)
    {
        /** @var TrooperInterface $trooper */
        foreach($patrouille->getTroopers() as $trooper){
            if(
                !isset($this->dejaDitBonjour[$trooper->getUuid()])
                && $trooper->getUuid() !== $this->uuid
            ){
                echo $this->name . " : Bonjour ".$trooper->getName()." sale sous fifre.".PHP_EOL;
                $this->dejaDitBonjour[$trooper->getUuid()] = true;
            }
        }
    }

    public function __destruct()
    {
        echo $this->name ." est mort pour l'empereur.".PHP_EOL;
    }

}