<?php
    $url_page = 'php/created/page/url.php';
    $param1 = 'this is string';
    $param2 = ' "bad" />? character%&'; //bad characters like the signs
    $linktext = "<Click> to see";


    $url = "http://localhost/";
    $url .= rawurldecode($url_page); //rawurlencode to the base link
    $url .= "?param1=" . urlencode($param1);
    $url .= "%param2=" . urlencode($param2);
    //this will give us a clean link to use 

    

    //htmlspecialchars escapes any html that might do bad things to your html page
?>
<a href = "<?php echo htmlspecialchars($url)?>">
        <?php echo htmlspecialchars($linktext)?>
 </a>