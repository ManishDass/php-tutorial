<?php
    $name = "Hello";
    $test = "";

    for($i = 0;$i<strlen($name);$i++)
    {
        $test += $name[$i];
    }

    

    //Using Builtin Function
    //echo strrev($name); 

    // $arr = array();

    // for($i = 0;$i<strlen($name);$i++)
    // {
    //     $arr[$i] = $name[$i];
    // }

    // $counter = count($arr)-1;

    // for($i = 0;$i<=count($arr)/2;$i++)
    // {
    //     $temp = $arr[$i];
    //     $arr[$i] = $arr[$counter];
    //     $arr[$counter] = $temp;
    //     $counter--;
    // }

    // print_r($arr);

?>