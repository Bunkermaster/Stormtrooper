<?php
/**
 * Created by PhpStorm.
 * @author Yann Le Scouarnec <bunkermaster@gmail.com>
 * Date: 28/04/2017
 * Time: 09:40
 */
namespace Empire;

use Wanagaine\ImperialGuard;

class Stormtrooper implements TrooperInterface
{
    /**
     * @var null|string
     */
    protected $name = null;
    /**
     * @var null|string
     */
    protected $uuid = null;
    /**
     * @var array
     */
    protected $dejaDitBonjour = [];

    /**
     * Stormtrooper constructor.
     * @param string $name nom du stormtrooper
     */
    public function __construct($name)
    {
        $this->name = $name;
        // generation de l'id unique de l'instance
        $this->uuid = uniqid();
    }

    /**
     * @param Patrouille $patrouille
     */
    public function saluer(Patrouille $patrouille)
    {
        /** @var TrooperInterface $trooper */
        // on boucle sur tous les elements de la patrouille
        foreach($patrouille->getTroopers() as $trooper){
            // si on a pas deja dit bonjour et que ce n'est pas this
            // je salue
            if(
                !isset($this->dejaDitBonjour[$trooper->getUuid()])
                && $trooper->getUuid() !== $this->uuid
            ){
                // si c'est un garde imperial, je fais gaffe
                // sinon, ouesh gros
                if ($trooper instanceof ImperialGuard) {
                    echo $this->name . " : Salutations distinguées "
                        .$trooper->getName().PHP_EOL;
                } else {
                    echo $this->name . " : Bonjour "
                        .$trooper->getName().PHP_EOL;
                }
                // je stock que je lui ai dit bonjour
                $this->dejaDitBonjour[$trooper->getUuid()] = true;
            }
        }
    }

    public function __destruct()
    {
        echo $this->name ." est mort.".PHP_EOL;
    }

    /**
     * @return null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return null|string
     */
    public function getUuid()
    {
        return $this->uuid;
    }

}
