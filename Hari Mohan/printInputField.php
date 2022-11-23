<!DOCTYPE html>
<html>
<head><meta charset="UTF-8">
<title>HTML with PHP</title>
</head>
<body>
<form action="" method="post">
Name:
<input type=text name="t1">
<br>
<br>
<input type=submit name="s">

<?php
if(isset($_POST['s']))
{
$a=$_POST['t1']; //accessing value from the text field
}
?>

<input type=text value="<?php echo @$a;?>">
<input type=text value="<?php echo @$_POST['t1'];?>">
</form>

</body>
</html>