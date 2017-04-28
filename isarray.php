<?php
/**
 * Created by PhpStorm.
 * User: ragib
 * Date: 4/2/17
 * Time: 4:45 AM
 */

    $person = array("Tom", "Jerry", "Tim", "Family" => array("Bob", "Max", "Ben"));

    foreach ($person as $check) {
        if (is_array($check)) {
            continue;
        }
        echo $check;
    }

?>