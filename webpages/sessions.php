<?php
    session_start();

    $_SESSION['first_name']='Akash';
    $_SESSION['last_name'] = 'Singh';

    $name = $_SESSION['first_name'] . " " . $_SESSION['last_name']; //using array methods to retreive session $first_name and session's $last_name
    echo $name;
?>