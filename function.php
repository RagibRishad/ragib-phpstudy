<?php
/**
 * Created by PhpStorm.
 * User: ragib
 * Date: 4/10/17
 * Time: 4:13 AM
 */

    function name_list($name1, $name2, $name3){
        echo "Those are " . $name1 . $name2 . $name3;
        echo "<br/>";
    }

    function addnum($num1, $num2, $num3){
        $result = $num1+$num2+$num3;
        return $result;
    }

    $friends = name_list("Peter", "Alex", "Mark");
    echo "Names are " . $friends;


    $sum = addnum(10, 20, 30);
    echo "The Result is " . $sum;

?>

