<?php
/**
 * Created by PhpStorm.
 * @author Yann Le Scouarnec <bunkermaster@gmail.com>
 * Date: 03/05/2017
 * Time: 12:42
 */
require_once "vendor/autoload.php";

//$trooper = new \Empire\ImperialGuard();
$trooper = new \Empire\Stormtrooper("jeanine");
if($trooper instanceof \Empire\TrooperInterface){
    echo "Peut monter la garde".PHP_EOL;
}
