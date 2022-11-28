<?php
abstract class Person
{
    abstract public function greet();
}

class Student extends Person
{
    function __construct($name)
    {
        $this->name = $name;
    }

    function greet()
    {
        echo "Hello $this->name";
    }
}

$obj = new Student("Manish Das");
$obj->greet();

?>