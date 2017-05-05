<?php

namespace Empire;

/**
 * Class TrooperInterface
 * @author Yann Le Scouarnec <bunkermaster@gmail.com>
 * @package Empire
 */
interface TrooperInterface
{
    public function getUuid();
    public function saluer(Patrouille $patrouille);
    public function getName();
}