<?php
        $array1 = array(12 , 45, 56, 7,8); //storing of an array
        echo $array1[0];
        echo "<br/> ";
        $array2 = array(34 , 45, 56  , array("hello" , 4.5 , 56)); //nested arrays
        echo $array2[3][1]; //accessing nested arrays here O/P will be 4.5


        $array3 = array("Name"=> "Akash Singh" , "phone_number " => " 842" , "role"=>" Software Developer" );
        echo print_r($array3); //print_r -> will pring the array in user readable form
        echo "<br/> ";
        echo "<br/> ";

        sort($array1);
        print_r($array1);

        echo "<br/> ";
        echo "<br/> ";
        echo "<br/> ";

        echo $string1 = implode("*" , $array1); //concatenate all the elements of an array together in the same order as they are in the array
        

?>