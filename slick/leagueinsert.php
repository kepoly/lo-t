<?php
mysql_connect("localhost","lot_root","112622094506");
mysql_select_db("lot_destinygame");
$character_name=$_POST['character_name'];
$character_description=$_POST['character_description'];

mysql_query("INSERT INTO league ".
       "(character_name, character_description) ".
       "VALUES('$character_name','$character_description')");
?>