<?php
/**
 * Created by PhpStorm.
 * User: ragib
 * Date: 4/10/17
 * Time: 7:07 AM
 */

    function add($num1, $num2){
        $result = $num1 + $num2;
        return $result;
    }

    function divide($num1, $num2){
        $result = $num1 / $num2;
        return $result;
    }

    $sum = divide(add(10,10), add(5,5));
    echo $sum;


?>