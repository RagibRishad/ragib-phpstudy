<?php
/**
 * Created by PhpStorm.
 * User: ragib
 * Date: 3/28/17
 * Time: 12:28 AM
 */

    $multiArray = array(
        'foodname' => array("Pizza", "Burger", "Coffee"),

        'price' => array(10, 12, 5),

        'quality' => array("good", "delicious", "fair")
    );


    echo "The price of " .  $multiArray['foodname'][1] . " is " . $multiArray['price'][1] . " dollars and the quality is " .
        $multiArray['quality'][0] . ".";
    echo "<br/>" . "<br/>";

    $foodA['foodname'][0] = "Croissant";
    $foodA['price'][0] = 8;

    //In case of changing assets and values //

    echo "The price for a " . $foodA['foodname'][0] . " is " . $foodA['price'][0] . " dollars.";
    echo "<br/>";





?>