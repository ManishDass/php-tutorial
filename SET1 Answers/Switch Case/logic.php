<?php

if(isset($_POST['submit']))
{
    $asarr = array("Cat"=>1,"Dog"=>2,"Lion"=>3,"Tiger"=>4,"Beaver"=>5);
    $arr = array(3,7,1,0,5,9,7);

    $choice = $_POST['choice'];

    switch($choice)
    {
        case 1:
            print_r(array_change_key_case($asarr, CASE_UPPER));
            break;
        case 2:
            sort($arr);
            print_r($arr);
            break;
        case 3:
            print_r(array_reverse($arr));
            break;
        default:
            echo "Please enter a valid option!";
            break;
    }
}

?>
