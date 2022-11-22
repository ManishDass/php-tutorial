<?php
    class Person {
    	public $name = "Manish Das";
    	
    	function getName()
    	{
    		return $this->name;
    	}
    	
    	function setName($name)
    	{
    		$this->name = $name;
    	}
    }
    
    $obj = new Person();
	$obj->setName("Pritam");
    $data = $obj->getName();
	
    echo $data;
?>