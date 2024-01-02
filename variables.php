<?php
    $var1 = "My Name is Akash";
    echo $var1;
    echo " <br/>";
    $string1 = "Examples to concatenate";
    echo " {$string1} is one example";
    echo " <br/>";
    echo "$string1" . " this is second example";

    echo " <br/>";

    // appending two strings

    $var1 = " String 1";
    $var2 = " Strnig 2 ";

    $string3 = $var1 . $var2;
    echo "{$string3} ";

    echo "<br/>";

    //string functions in php

    $mainstring = "My Name is Akash and I am learning PHP";

    echo ucfirst($mainstring);
    echo "<br/> ";
    echo strstr($mainstring , "Akash");
    echo "<br/> ";
    echo str_replace("learning", " reading" ,$mainstring);

?>