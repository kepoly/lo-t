<?php
if(isset($_POST['add']))
{
$dbhost = 'localhost';
$dbuser = 'lot_root';
$dbpass = '112622094506';
$con = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $con )
{
  die('Could not connect: ' . mysql_error());
}
$character_name = mysql_real_escape_string($_POST['character_name']);

$character_activity = mysql_real_escape_string($_POST['character_activity']);

$character_description = mysql_real_escape_string($_POST['character_description']);

$character_level = $_POST['character_level'];

$character_region = $_POST['character_region'];

$character_console = $_POST['character_console'];

$sql = "INSERT INTO league ".
       "(character_name, character_activity, character_description, character_level, character_region, character_console) ".
       "VALUES('$character_name','$character_activity', '$character_description', '$character_level', '$character_region', '$character_console')";
mysql_select_db('lot_destinygame');
$retval = mysql_query( $sql, $con );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}

//echo "Entered data successfully\n";
//echo '<a href="index.php">Go home</a>';
mysql_close($con);
}
?>
<?php
echo "<script>window.location = '../games/leagueoflegends'</script>";

?>