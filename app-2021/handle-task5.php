<?php
$name = $_REQUEST['name'];
$name1 = $_REQUEST['name1'];
$name2 = $_REQUEST['name2'];
$name3 = $_REQUEST['name3'];
$name4 = $_REQUEST['name4'];
printf("First Subject Marks : %d",$name);
echo "<br>";
printf("Second Subject Marks : %d",$name1);
echo "<br>";
printf("Third Subject Marks : %d",$name2);
echo "<br>";
printf("Fourth Subject Marks : %d",$name3);
echo "<br>";
printf("Fifty Subject Marks : %d",$name4);
echo "<br>";

//printf("Totale Number : %d",$name+$name1+$name2+$name3+$name4);
//$sum = $name+$name1+$name2+$name3+$name4;
//printf("Persent : %d",500/100*$name+$name1+$name2+$name3+$name4);
$s=$name+$name1+$name2+$name3+$name4;
printf("persent : %d",$s*100/500);
?>