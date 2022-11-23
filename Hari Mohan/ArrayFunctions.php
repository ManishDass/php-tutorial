<?php
echo "Change case of key";
echo "<br>";
$salary=array("raj"=>"50000","Vijay"=>"20000","mohan"=>"21000");
print_r(array_change_key_case($salary,CASE_UPPER));
echo "<br>";
print_r($salary);

?>

<?php
$array = ["a"=>2, "b"=>5, "c"=>7, "e"=>9, "f"=>1, "g"=>0, "h"=>8, "i"=>3];
$chunks = array_chunk($array, 3);
echo "<br>The chunks are";
foreach ($chunks as $chunk) {
    echo "<br>";
    print_r($chunk);
}
?>
<?php
$salary=array("Sonoo"=>"550000","Vimal"=>"250000","Ratan"=>"200000");
echo "<br>The chunks are<br>";
print_r(array_chunk($salary,1));
?>
<?php
echo "<br>Count<br>";
$season=array("summer","winter","spring","autumn");
echo count($season);
?>

<?php
echo "<br> sort<br>";
$season=array("summer","winter","spring","autumn");
sort($season);
foreach($season as $s)
{
echo"$s<br/>";
}
?>


<?php
echo"<br> Reverse<br/>";
$season=array("summer","winter","spring","autumn");
$reverseseason=array_reverse($season);
foreach($reverseseason as $s)
{
    echo"$s<br/>";
}
?>



<?php
echo"<br>Search<br/>";
$season=array("summer","winter","spring","autumn");
$key=array_search("autumn",$season);
echo$key;
?>