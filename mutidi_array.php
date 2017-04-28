<?php
/**
 * Created by PhpStorm.
 * User: ragib
 * Date: 3/27/17
 * Time: 10:40 PM
 */

    $multiArray = array(
        'names' => array("Bob", "Alex", "Ponting"),

        'ages' => array(15, 28, 30)
    );

    echo $multiArray['names'][1] . "is " . $multiArray['ages'][1] . "years old.";

    echo "<br/>";

    $personaA['names'][0] = "Tim";
    $personaA['ages'][0] = 28;

    echo $personaA['names'][0] . " is " . $personaA['ages'][0] . " years old.";




?>