<?php
/**
 * Created by PhpStorm.
 * User: ragib
 * Date: 3/30/17
 * Time: 2:09 AM
 */

    $mouse = "Belkin";

    switch ($mouse) {
        case "A4Tech":
            echo "Made in China.";
            echo "<br />";
            break;

        case "Deluxe":
            echo "Not that good.";
            echo "<br />";
            break;

        case "Belkin":
            echo "Also Good.";
            echo "<br />";
            break;

        default:
            echo "Logitech is Good";
            echo "<br />";
            break;
    }


?>

<?php
    $food = "Fried Rice";

    if ($food == "Biriyani") {
        echo "I love Biriyani.";
        echo "<br />";
    } elseif ($food == "Tandoori") {
        echo "Tandoori with Chicken.";
        echo "<br />";
    } elseif ($food == "Fried Rice") {
        echo "Tastes good with masala Chicken.";
        echo "<br />";
    } elseif ($food == "Chicken Polao") {
        echo "Chicken is my favourite.";
        echo "<br />";
    } else {
        echo "All the foods were great.";
        echo "<br />";
    }

?>
