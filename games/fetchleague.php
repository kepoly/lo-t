<?php 
//database settings
$connect = mysqli_connect("localhost", "lot_root", "112622094506", "lot_destinygame");
 
$result = mysqli_query($connect, "SELECT character_name, character_level, character_console, character_activity, character_description, character_region,
timestampdiff(MINUTE,list_date, NOW()) AS list_date FROM league WHERE list_Date >= NOW() - INTERVAL 49780 MINUTE GROUP BY id DESC LIMIT 25");
 
$data = array();
 
while ($row = mysqli_fetch_array($result)) {
  $data[] = $row;
}
    print json_encode($data);
 ?>