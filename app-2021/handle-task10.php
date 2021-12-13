<?php
$name = $_REQUEST['name'];
$name2 = $_REQUEST['name2'];
$rem=$name/$name2;
$val=(int)$rem;
$m=$name-$name2*$val;
echo "<h3>REMAINDER  WITHOUT USE[%]<h3>";
echo "<br>Fisrt Inputed Value<br>",$name;
echo "<br>Second Inputed Value<br>",$name2;
echo "<br>Display Remainder<br>",$m;
?>