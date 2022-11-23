<html>
<head><title>Hello Data</title></head>
<body>
<?php
$sname;
$sroll;
$conn=new mysqli('localhost','root','','practice');//no password
if($conn->connect_error)
{
echo "unable to connect";
echo '</br>';
}
else{
$query = mysqli_query($conn, "SELECT * FROM user");
if(!$query){
die(mysqli_error($conn));
}
if (mysqli_num_rows($query) > 0)
{
$rowdata = mysqli_fetch_assoc($query);
$username= $rowdata["username"];
$email=$rowdata["email"];
}
}
?>
<input type=text value="<?php echo @$username;?>">
<input type=text value="<?php echo @$email;?>">
</body>
</html>