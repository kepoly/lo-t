<?php
// Start the session
session_start();
require '../inc/header.php';

?>
<html class="bg_class">

    <div class="container">
<hr />
<hr />
<h1 style="color: white;">Destiny</h1> 

<!--JUMBOTRON-->

<div class="jumbotron">

  <h1>Destiny Looking for Fireteam!</h1>
  <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
  <div class="jumbo_bg">
</div>
</div>


<!--POPUP-->    
    <div id="blanket" style="display:none;"></div>
	<div id="popUpDiv" style="display:none;">
    	<div id="exitModal"><a href="#" onclick="popup('popUpDiv')">X</a></div>
    	
<form method="post" action="../slick/insert.php">
<table class="guardianList" width="400px" style="margin: 0 auto;" border="0">
<caption><h2 style="margin-left: 25px;">List my Guardian</h2></caption>
<tr>
<td>Guardian Name
<input name="guardianName" type="text" id="guardianName" class="form-control3" placeholder="Guardian Name" required></td>
</tr>

<tr>
<td>Guardian Level
<input name="gamelevel" type="number" min="20" max="32" id="level" class="form-control3" placeholder="20-32"required></td>
</tr>
<tr>
<td colspan="2">

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
                <option value="strawberry">Strawberry</option>
                <option value="caramel">Caramel</option>
        </select>

</td>
</tr>
<tr>

<td colspan="2">

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
<input name="add" type="submit" id="add" value="Add Guardian" class="btn btn-primary btn-lg">
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
<form method="POST" action="../inc/filter.php">
<select class="form-control" name="add_region" id="add_region" onchange="this.form.submit();">
  <option value="../inc/filter.php">22</option>
  <option value="../inc/filter.php">Other</option>
  <option value="xb360">Xbox 360</option>
  <option value="ps4">Playstation 4</option>
    <option value="ps3">Playstation 3</option>
</select>
    </form>
</div>
<div class="input-group1">
<select class="form-control">
  <option value="allConsoles">All Consoles</option>
  <option value="xb1">Xbox One</option>
  <option value="xb360">Xbox 360</option>
  <option value="ps4">Playstation 4</option>
    <option value="ps3">Playstation 3</option>
</select>
</div>

<!--SEARCH_FILTER-->
<div class="filter_search">
<div class="row">
  <div class="col-lg-9">
    <div class="input-group">
      <input type="search" class="form-control2">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">Go!</button>
      </span>
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->
</div>

</div>


 
<br />
<hr />
<!--GUARDIAN_TABLE-->
<div id="results">
<?php 

$con=mysqli_connect("localhost","root", "", "gamedb");
// Check connection
$changingValue = '*';
$result_else = mysqli_query($con,"SELECT * FROM destinygame WHERE listDate >= NOW() - INTERVAL 1440 MINUTE GROUP BY id DESC LIMIT 25");
$_SESSION['result_else'] = mysqli_query($con,"SELECT * FROM destinygame WHERE listDate >= NOW() - INTERVAL 1440 MINUTE AND guardianRegion = 'Asia' GROUP BY id DESC LIMIT 25");

echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';


if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$result = $_SESSION['result_else'];

if (!$result) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}
echo "<table class='table'>
<tr>
<th colspan='2' style='text-align: center;'>Guardian Info</th>
<th>Game Type</th>
<th>Region</th>
<th>Time Posted</th>

</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr  style='font-family: Lato;'>";
echo "<td>" . "<b style='font-size: 17px;'>"  .  $row['guardianName']  . "</b>" . ' - ' . $row['gamelevel']  .   "</td>";
echo "<td>" . $row['guardianConsole']  . "</td>";
echo "<td>" . $row['gameType']  . "</td>";
echo "<td>" . $row['guardianRegion']  . "</td>";
echo "<td>" . $row['listdate']  . "</td>";
echo "</tr>";
}
echo "</table>";

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