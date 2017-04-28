<?php
/**
 * Created by PhpStorm.
 * User: ragib
 * Date: 4/10/17
 * Time: 5:46 PM
 */

    function add($a, $b)
    {
        $add = $a + $b;
        if ($add >= 20) {
            echo "It's " . $add;
        } else {
            echo "Out of limit";
        }

    }

    add(10, 5);

?>