<?php

class Person
{
    public $name;
    public $age;

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    function getName()
    {
        return $this->name;
    }

    function getAge()
    {
        return $this->age;
    }


}

$obj = new Person("Manish",23); //paramitarized constructor 
echo $obj->getName(); //Calling the method using obj

?>