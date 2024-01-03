<?php
    $var1 = 25;
    $char1 = 2;
    if($var1 > $char2){//conditional statement checks for comparision between the two variables
        echo " resolved";
    }

    echo " <b/>";

    if($var1 == 25 || $var2 >6){ //logical operations like AND or OR helps checking 2 or more than 2 conditions at once
        echo "one of the two condition has been met";
    }


    //ifelse statements in php

    $number = 10;

    if ($number > 10) {
        echo "The number is greater than 10!";
    } elseif ($number < 10) {
        echo "The number is less than 10!";
    } else {
        echo "The number is equal to 10!";
    }

    //shortened form of ifelse statements are ternary operators

    $result = ($number > 10) ? "Condition is true" : "Condition is false";
    echo $result;//first part of ternary operator after question mark is executed if statement is true else if it is false
?>