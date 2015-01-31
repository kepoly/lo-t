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
$charName = mysql_real_escape_string($_POST['charName']);

$gameType = mysql_real_escape_string($_POST['gameType']);

$charDesc = mysql_real_escape_string($_POST['charDesc']);

$charLevel = $_POST['charLevel'];

$charRegion = $_POST['charRegion'];

$charConsole = $_POST['charConsole'];

$sql = "INSERT INTO battlefield4game ".
       "(charName, gameType, charDesc, charLevel, charRegion, charConsole) ".
       "VALUES('$charName','$gameType', '$charDesc', '$charLevel', '$charRegion', '$charConsole')";
mysql_select_db('lot_destinygame');
$retval = mysql_query( $sql, $con );
if(! $retval )
{
echo "<script>window.location = '../games/battlefield4.php'</script>";

  die('Could not enter data: ' . mysql_error());
}

//echo "Entered data successfully\n";
//echo '<a href="index.php">Go home</a>';
echo "<script>window.location = '../games/battlefield4'</script>";

mysql_close($con);

}

?>

