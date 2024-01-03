<?php
    function defaultval($name = " Akash"){ //->this is called default value , i.e. it is used when this funciton is called with no parameters


        echo "my name is {$name}";
    }

    defaultval(); //output will be -> my name is Akash
    defaultval("Virat Kohli") //output will be -> my name is Virat Kohli
?>