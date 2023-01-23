<?php
$first_name = htmlspecialchars(filter_input(INPUT_POST, 'first_name'));
$last_name = htmlspecialchars(filter_input(INPUT_POST, 'last_name'));

$some_number = 42;

//increment
$some_number++;

//decrement
$some_number--;

//combined assignment operators
$some_number += 10;
$some_number -= 5;

$some_number_with_a_decimal = 7.7;

$name = "Kimmy Gabrys";

$name .= ", cat wrangler";

$is_awesome = true;

// integer division
$integer_quotient = intdiv(7, 2);

$output = "";

$counter = 1;
while ($counter < 10) {
    $output .= "</br> $counter";
    $counter++;
}
?>
<!DOCTYPE html>
<!--
Kimmy Gabrys // CIS 2454 // 1/23/23 // Week 2
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <?php include ('nav.php'); ?>
        
        <?php
        
        echo "</br>";
        echo "Hi " . $first_name . " " . $last_name;
        echo "</br>";
        echo "Hi $first_name $last_name";
        echo "</br>";
        echo $some_number . " is the answer";
        echo "</br>";
        echo "$name is awesome: $is_awesome";
        echo "</br>";
        echo "7/2 is: " . (7 / 2);
        echo "</br>";

        if (7 < 2) {
            echo " 7 is less than 2";
        } else {
            echo " 2 is less than 7";
        }

        echo "</br>";

        if ($first_name == "Kimmy") {
            echo "Hi Kimmy!";
        } else {
            echo "You aren't Kimmy.";
        }

        echo "</br>";

        if ($first_name == 10) {
            echo "You're named 10?!";
        } else {
            echo "You aren't 10.";
        }

        echo "</br>";

        // === is for identical - same value and same type
        if ($first_name === 10) {
            echo "You're named 10?!";
        } else {
            echo "You aren't 10.";
        }

        echo $output;

        for ($index = 0; $index < 10; $index++) {
            $output .= "</br> $index";
        }
        ?>

    </body>
</html>
