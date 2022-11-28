<?php
// Starting session
session_start();
 
// Accessing session data
echo 'Hi, ' . $_SESSION["favcolor"] . ' ' . $_SESSION["favanimal"];
?>