<?php 
    $string = "c,i,n,q,u,e";

    $array = explode(",", $string);

   /*  $result = array_values($array); */
    $res = [];
    foreach ($array as $char) {
        $res[$char] = $char ;
    }

    var_dump($res);
?>