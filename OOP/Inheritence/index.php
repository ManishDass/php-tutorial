<?php

class State
{
    public $name;
    public $language;

    function __construct($name, $language)
    {
        $this->name = $name;
        $this->language = $language;
    }

    function getName()
    {
        return $this->name;
    }

    function getAge()
    {
        return $this->language;
    }
}

class Tripura extends State
{
    function getParentVarible()
    {
        echo "Name of the state is: $this->name";
    }
}

$obj = new Tripura("Tripura","Bengali");
$obj->getParentVarible();

?>