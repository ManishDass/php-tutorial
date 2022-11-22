<?php
$conn = mysqli_connect("localhost", "root", "", "practicedb");
if ($conn === false) {
    echo "ERROR: Could not connect.";
}

if (isset($_POST['submit'])) {

    $empid = $_POST['eid'];
    $empname = $_POST['ename'];
    $salary = $_POST['esalary'];
    $sql = "INSERT INTO employee VALUES ('$empid','$empname','$salary')";

    if (mysqli_query($conn, $sql)) {
        echo "<h3>Row Inserted</h3>";
    } else {
        echo "ERROR ";
    }
}


if (isset($_POST['update'])) {

    $eid = $_POST['eid'];
    $empname = $_POST['ename'];

    $sql = "UPDATE `employee` SET `empname`='$empname' WHERE `empid`='$eid'";

    if (mysqli_query($conn, $sql)) {
        echo "<h3>Row Updated</h3>";
    } else {
        echo "ERROR ";
    }
}



if (isset($_POST['delete'])) {
    $empid = $_POST['eid'];

    $sql = "DELETE FROM `employee` WHERE `empid`=$empid";

    if (mysqli_query($conn, $sql)) {
        echo "<h3>Row Deleted</h3>";
    } else {
        echo "ERROR ";
    }
}



if (isset($_POST['print'])) {

    $empid = $_POST['eid'];
    $empname = $_POST['ename'];
    $salary = $_POST['esalary'];

    $sql = "SELECT * FROM `employee`";

    if ($test = mysqli_query($conn, $sql)) {
        if (mysqli_num_rows($test) > 0) {
            while ($rowdata = mysqli_fetch_assoc($test)) {
                echo '</br>';
                echo "Employee ID:" . $rowdata["empid"];
                echo "</br>";
                echo "Employee Name:" . $rowdata["empname"];
                echo "</br>";
                echo "Employee Salary:" . $rowdata["salary"];
                echo "</br>";
            }
        }
    } else {
        echo "ERROR ";
    }
}

//Its important to close the connection
mysqli_close($conn);


?>


<h3>Employee Management</h3>

<form action="" method="post">
        <label for="eid">Employee name</label>
        <p><input type="number" name="eid" placeholder="enter eid 👨🏻"></p>
        <p><input type="text" name="ename" placeholder="enter ename ㈴"></p>
        <p><input type="number" name="esalary" placeholder="enter esalary 💵"></p>

        <input type="submit" name="submit" value="Submit">
        <input type="submit" name="update" value="Update">
        <input type="submit" name="delete" value="Delete">
        <input type="submit" name="print" value="Print">
</form>