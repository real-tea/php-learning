<?php
        $array1 = array(12 , 45, 56, 7,8);
        echo $array1[0];
        echo "<br/> ";
        $array2 = array(34 , 45, 56  , array("hello" , 4.5 , 56));
        echo $array2[3][1];


        $array3 = array("Name"=> "Akash Singh" , "phone_number " => " 842" , "role"=>" Software Developer" );
        echo print_r($array3);
        echo "<br/> ";
        echo "<br/> ";

        sort($array1);
        print_r($array1);

        echo "<br/> ";
        echo "<br/> ";
        echo "<br/> ";

        echo $string1 = implode("*" , $array1);
        

?>