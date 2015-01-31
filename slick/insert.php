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
$guardianName = mysql_real_escape_string($_POST['guardianName']);

$gameType = mysql_real_escape_string($_POST['gameType']);

$guardianDesc = mysql_real_escape_string($_POST['guardianDesc']);

$gamelevel = $_POST['gamelevel'];

$guardianRegion = $_POST['guardianRegion'];

$guardianConsole = $_POST['guardianConsole'];

$sql = "INSERT INTO destinygame ".
       "(guardianName, gameType, guardianDesc, gamelevel, guardianRegion, guardianConsole) ".
       "VALUES('$guardianName','$gameType', '$guardianDesc', '$gamelevel', '$guardianRegion', '$guardianConsole')";
mysql_select_db('lot_destinygame');
$retval = mysql_query( $sql, $con );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}

//echo "Entered data successfully\n";
//echo '<a href="index.php">Go home</a>';
echo "<script>window.location = '../games/destiny'</script>";

mysql_close($con);

}

?>

