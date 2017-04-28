<?php
/**
 * Created by PhpStorm.
 * User: ragib
 * Date: 3/30/17
 * Time: 5:42 AM
 */

    /* Way: One */

    $arr = array("Ice-cream", "Chocolate", "Wafer", "Chips");

    foreach ($arr as $value) {
        echo $value . "<br/>";
        echo "<br/>";
    }


    /* Way: Two */

    foreach ($arr as $key => $value) {
        echo "Key is " . $key . " &rarrw; " . $value . "<br/>";
    }

?>