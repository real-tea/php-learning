<?php
    
    $var1 = 0;
    if(isset($_COOKIE['test'])){
        $var1 = $_COOKIE['test'];
    }
    echo $var1;

    setcookie('test',0,time()-(60*60*24*7));//deletes the cookies
?>