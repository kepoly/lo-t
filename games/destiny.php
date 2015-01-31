<html>
<?php 
require '../inc/header.php';
?>
<style>
body {
  background: url(../img/destinybg.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  }
</style>
    <div class="container">
<br />
<br />
<br />
<!--JUMBOTRON-->

<div class="jumbotron">

  <h1>Destiny Looking for Fireteam!</h1>
  <p>Hey guys we are in beta mode right now, but feel free to browse through the listed 
  guardians with the current filters and use the "List my Guardian" Button to post fireteam!
  
 <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
  <div class="jumbo_bg">
</div>
</div>


<!--POPUP-->    
    <div id="blanket" style="display:none;"></div>
	<div id="popUpDiv" style="display:none;">    	
<form method="post" action="../slick/insert.php">
<table class="guardianList" width="500px" border="0">
<caption><h2>List my Guardian</h2></caption>
    	<div id="exitModal"><a href="#" onclick="popup('popUpDiv')">X</a></div>
<tr>
<td><label for="guardianName">Guardian Name</label>
<input name="guardianName" type="text" id="guardianName" class="form-control3" placeholder="Guardian Name" required></td>
</tr>
<tr>
<td><label for="guardianDesc">Description</label>
<input name="guardianDesc" type="text" id="guardianDesc" class="form-control3"  rows="4"  placeholder="Short description up to 140 chars"></td>
</tr>
<tr>
<td><label for="gamelevel">Guardian Level</label>
<input name="gamelevel" type="number" min="20" max="32" id="level" class="form-control3" placeholder="20-32"required></td>
</tr>
<tr>
<td colspan="2">
<label for="gameType">Game Type</label>
     <select class="form-control3" name="gameType" id="gameType" required>
     <optgroup label="Raid - Normal">
                <option value="Vault of Glass - Any">Vault of Glass - Any</option>
                     <option value="Vault of Glass - Full Raid">Vault of Glass - Full Raid</option>
     	<optgroup label="CheckPoints">
                <option value="Vault of Glass - Conflux">Vault of Glass - Conflux</option>
                <option value="Vault of Glass - Oracles">Vault of Glass - Oracles</option>
                <option value="Vault of Glass - Templar">Vault of Glass - Templar</option>
                <option value="Vault of Glass - Gatekeeper">Vault of Glass - Gatekeeper</option>
                <option value="Vault of Glass - Atheon">Vault of Glass - Atheon</option>
                </optgroup>
                </optgroup>
     <optgroup label="Heroics">
                <option value="Daily heroic">Daily heroic</option>
                <option value="Weekly Heroic">Weekly Heroic</option>
</optgroup>
        </select>

</td>
</tr>
<tr>

<td colspan="2">
<label for="guardianRegion">Region</label>
     <select class="form-control3" name="guardianRegion" id="guardianRegion">
     <optgroup label="Regions">
                <option value="North America">North America</option>
                     <option value="South America">South America</option>
                        <option value="Europe">Europe</option>
                    		 <option value="Asia">Asia</option>
                    			 <option value="Other">Other</option>
                </optgroup>

        </select>

</td>
</tr>
<tr>

<td colspan="2">
<label for="guardianConsole">Console</label>
     <select class="form-control3" name="guardianConsole" id="guardianConsole">
     <optgroup label="Consoles">
                <option value="Xbox One">Xbox One</option>
                     <option value="Xbox 360">Xbox 360</option>
                        <option value="Playstation 4">Playstation 4</option>
                    		 <option value="Playstation 3">Playstation 3</option>
                    			 <option value="Pc">Computer - PC</option>
                </optgroup>

        </select>

</td>
</tr>
<tr>
<td>
<input name="add" type="submit" id="add" value="Add Guardian" class="btn btn-primary">
	<button type="button" class="btn btn-primary" 
data-toggle="dropdown" aria-expanded="false" style="float: right; margin-right: 5px;">  
<a href="#" onclick="popup('popUpDiv')" style="color: white;">Cancel</a></button>
</td>
</tr>
</table>
</form>

	</div>	
	
	<button type="button" class="btn btn-primary btn-lg dropdown-toggle" 
data-toggle="dropdown" aria-expanded="false" style="right: 0; float: right;">  
<a href="#" onclick="popup('popUpDiv')" style="color: white;">List my Guardian</a></button>
<!-- / POPUP-->     


<!--FILTER-->

<h2  style="color: white;">Filter</h2>
<div class="filter_group">
<!--DROPDOWN_FILTER-->
<div class="input-group">
<form name="add_region" method="POST" action="destiny">
<select class="form-control" name="add_region" id="add_region" onchange="this.form.submit();">
  <option value="">All</option>
  <option value="North America">North America</option>
  <option value="South America">South America</option>
  <option value="Europe">Europe</option>
  <option value="Asia">Asia</option>
    <option value="Other">Other</option>
</select>
    </form>
</div>

<script type="text/javascript">
  document.getElementById('add_region').value = "<?php echo $_POST['add_region'];?>";
</script>


<div class="input-group1">
<form name="add_console" method="POST" action="destiny">
<select class="form-control" name="add_console" id="add_console" onchange="this.form.submit();">
  <option value="">All Consoles</option>
  <option value="Xbox One">Xbox One</option>
  <option value="Xbox 360">Xbox 360</option>
  <option value="Playstation 4">Playstation 4</option>
    <option value="Playstation 3">Playstation 3</option>
        <option value="Pc">Computer</option>
</select>
</form>
</div>

<script type="text/javascript">
  document.getElementById('add_console').value = "<?php echo $_POST['add_console'];?>";
</script>

<!--SEARCH_FILTER-->
<div class="filter_search">
<div class="row">
  <div class="col-lg-9">
    <div class="input-group">
    	<form name="search" method="POST" action="destiny">
      <input type="text" name="search_box" class="form-control2" placeholder="Search Name or Description">
            <input type="submit" name="search" class="form-control2" style="position: absolute; left: -9999px">
<span style="float:right;"><a href="<?php echo curPageURL(); ?>">View All Results</a></span>

                 	</form>

    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->
</div>

</div>


 <br />
<br />
<h5 style="float:right;">Listings Last: 925440 Minutes</h5>

<hr />
<!--GUARDIAN_TABLE-->

<div id="results">
<?php 
// Check connection
require '../inc/connection.php';
$listingLastTime = 925440;
//Select All from destinyGame
$result_else = "SELECT guardianName, gamelevel, guardianConsole, gameType, guardianDesc, guardianRegion,
timestampdiff(MINUTE,listdate, NOW()) AS listdate FROM destinygame WHERE listDate >= NOW() - INTERVAL $listingLastTime MINUTE ";
// Session Variable $_SESSION['result_else'] = mysqli_query($con,"SELECT * FROM destinygame WHERE listDate >= NOW() - INTERVAL 1440 MINUTE GROUP BY id DESC LIMIT 25");
//echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';

//Search Function
if (isset($_POST['search'])) {
$search_term = mysqli_real_escape_string($con, $_POST['search_box']);	
$result_else .= "AND guardianName LIKE'%{$search_term}%'";
$result_else .= "OR guardianDesc LIKE'%{$search_term}%' ";
}

//Region Dropdown Function
if (isset($_POST['add_region'])) {
$drop_term = mysqli_real_escape_string($con, $_POST['add_region']);	
$result_else .= "AND guardianRegion LIKE'%{$drop_term}%'";
}

//Console Dropdown Function
if (isset($_POST['add_console'])) {
$drop2_term = mysqli_real_escape_string($con, $_POST['add_console']);	
$result_else .= "AND guardianConsole LIKE'%{$drop2_term}%'";
}
$result_else .= "ORDER BY id DESC LIMIT 25";

$result = mysqli_query($con, $result_else);
echo "<table class='table'>
<tr>
<th>Guardian Info</th>
<th>Game Type</th>
<th>Region</th>
<th>Time Listed</th>

</tr>";


while($row = mysqli_fetch_array($result))
{
echo "<tr class='first_row'>";
echo "<td>" . "<b class='rowBold' style='font-size: 17px;'>"  .  $row['guardianName']  . "</b>" . ' ' . $row['gamelevel'] 
. "<br />" .  $row['guardianConsole']  . "</td>";
echo "<td>" . "<b class='descBold'>" . $row['gameType'] . "</b>" . "<br />" . $row['guardianDesc']  . "</td>";
echo "<td>" . $row['guardianRegion']  . "</td>";
echo "<td>". "<b>" . $row['listdate'] . "</b>" . ' Minutes Ago' . "</td>";
echo "</tr>";
}
echo "</table>";

?>


<?php
function curPageURL() {
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}
?>



</div>
<!--FOOTER-->
<div class="row">
            <div class="col-sm-12">
                <footer>
                    <p>&copy; LK4G</p>
                </footer>
            </div>
        </div>
        
</body>
</html>