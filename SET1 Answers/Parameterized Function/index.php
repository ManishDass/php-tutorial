<?php
    $EmpID;
    $EmpName;

    function setEmployeeData($id,$name)
    {
        $GLOBALS['EmpID'] = $id;
        $GLOBALS['EmpName'] = $name;
    }

    function printEmployeeData()
    {
        echo "Employee ID: $GLOBALS[EmpID] <br>";
        echo "Employee Name: $GLOBALS[EmpName]";
    }

    setEmployeeData(12100139,"Manish Das");
    printEmployeeData();
?>