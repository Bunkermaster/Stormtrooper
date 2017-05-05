<?php
/**
 * Created by PhpStorm.
 * @author Yann Le Scouarnec <bunkermaster@gmail.com>
 * Date: 28/04/2017
 * Time: 09:42
 */
use \Empire\{Stormtrooper, Patrouille};
use \Wanagaine\ImperialGuard;

require_once "vendor/autoload.php";
// creation de la patrouille avec des elements qui implementent TrooperInterface
$patrouille = new Patrouille();
$patrouille->addTroopers(new Stormtrooper('TK-101'));
$patrouille->addTroopers(new Stormtrooper('TK-METRO'));
$patrouille->addTroopers(new Stormtrooper('TK-T'));
$patrouille->addTroopers(new Stormtrooper('TK-TANTKTAN-OHEOHE'));
$patrouille->addTroopers(new Stormtrooper('TIK-TAK'));

// affichage $patrouille
dump($patrouille);
// salutations entre troopers
$patrouille->saluer();
// rajout d'un VIP
$patrouille->addTroopers(new ImperialGuard('TIK-TIKTIKBOOM'));
// salutations entre troopers et VIP
$patrouille->saluer();
