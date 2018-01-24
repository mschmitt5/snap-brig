<?php
/**
 * Created by PhpStorm.
 * User: schmi
 * Date: 1/24/2018
 * Time: 8:08 AM
 **/



$prisonerCrime = ["larceny", "embezzlement", "praising Comcast", "tampering with replicators", "vehicular manslaughter"];

$prisonerName = ["Brent", "Miguel", "Nat"];

$prisoner1 = $prisonerName[array_rand($prisonerName)];
$prisoner1Crime = $prisonerCrime[array_rand($prisonerCrime)];

echo "$prisoner1 charged with $prisoner1Crime";
