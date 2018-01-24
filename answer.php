<?php
/**
 * Created by PhpStorm.
 * User: schmi
 * Date: 1/24/2018
 * Time: 8:42 AM
 **/

function throwInBrig() {
    $crimes = ["larceny", "embezzlement", "praising Comcast", "tampering with replicators", "vehicular manslaughter"];
    $prisoners = ["Brent", "Miguel", "Nat"];

    $conviction = array_rand($crimes);
    $perpetrator = array_rand($prisoners);

    echo "Mr. Worf, throw $perpetrator in the brig for $conviction" . PHP_EOL;

    $solitaryCell = new \stdClass();
    $solitaryCell->conviction = $conviction;
    $solitaryCell->perpetrator = $perpetrator;
    return($solitaryCell);
}

$solitaryCell = throwInBrig();

var_dump($solitaryCell);