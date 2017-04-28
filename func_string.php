<?php
/**
 * Created by PhpStorm.
 * User: ragib
 * Date: 4/10/17
 * Time: 3:46 PM
 */

    $user_ip = $_SERVER['REMOTE_ADDR'];

    function ip_check()
    {
        global $user_ip;
        echo "My IP Address is: " . $user_ip;
        echo "<br/>";
    }
    ip_check();


?>

<?php

    function add($a, $b)
    {
        $addition = $a + $b;
        return $addition;
        echo "your result is: ";

    }

    echo "Your result is = ";
    echo add(50, 40);


?>
