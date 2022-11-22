<?php

interface Greet
{
    const AGE = 23; //better to use capital for constant
    public function print($user);
}

class User implements Greet
{
    private $age;
    function print($user)
    {
        $age = Greet::AGE;
        echo "Hello $user, you are $age years old.";
    }
}

$obj = new User();
$obj->print("Manish");

?>