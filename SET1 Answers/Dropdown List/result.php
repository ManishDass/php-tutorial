<?php
    if(isset($_POST['submit']))
    {
        $color = $_POST['color'];
        echo "<p style='color:$color'>You have choose color: $color</p>";
    }


?>