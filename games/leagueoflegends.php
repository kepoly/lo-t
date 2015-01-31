<html ng-app="fetch">
<?php
require '../inc/header.php';
?>
<style>
body {
  background: url(../img/leaguebg.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  }
</style>
<body>
<br>
  <div class="row">
    <div class="container">
<br />
<br />
<br />

<!-- JUMBOTRON -->
<div class="jumbotron">
<h1>LaegueOfLegends Looking 4 Team</h1>
<p>Hey guys we are in beta mode right now, but feel free to browse through the listed 
characters with the current filters and use the "List my Character" Button to post your team!
<a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
<div class="jumbo_bg">
</div>
</div>
<!-- END_JUMBOTRON -->
    
<!--POPUP-->    
<div id="blanket" style="display:none;"></div>
<div id="popUpDiv" style="display:none;">    	
<form name="form1" method="POST" action="../slick/insertleague.php">
<table class="guardianList" width="500px" border="0">
<caption><h2>List my Character</h2></caption>
<div id="exitModal"><a href="#" onclick="popup('popUpDiv')">X</a></div>
<!-- INSERT CHARACTER NAME -->
<tr>
<td><label for="character_name">Character Name</label>
<input name="character_name" type="text" id="character_name" class="form-control3" placeholder="Character Name" required></td>
</tr>
<!-- END_INSERT CHARACTER NAME -->
<!-- INSERT CHARACTER DESCRIPTION -->
<tr>
<td><label for="character_description">Description</label>
<input name="character_description" type="text" id="character_description" class="form-control3"  rows="4"  placeholder="Short description up to 140 chars"></td>
</tr>
<!-- END_INSERT CHARACTER DESCRIPTION -->
<!-- INSERT CHARACTER LEVEL -->
<tr>
<td><label for="character_level">Character Level</label>
<input name="character_level" type="number" min="0" max="32" id="character_level" class="form-control3" placeholder="20-32"required></td>
</tr>
<!-- END_INSERT CHARACTER LEVEL -->
<!-- INSERT CHARACTER ACTIVITY -->
<tr>
<td colspan="2">
<label for="character_activity">Game Type</label>
<select class="form-control3" name="character_activity" id="character_activity" required>
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
<!-- END_INSERT CHARACTER ACTIVITY -->
<!-- INSERT CHARACTER REGION -->
<tr>
<td colspan="2">
<label for="character_region">Region</label>
<select class="form-control3" name="character_region" id="character_region">
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
<!-- END_INSERT CHARACTER REGION -->
<!-- INSERT CHARACTER CONSOLE -->
<tr>
<td colspan="2">
<label for="character_console">Console</label>
     <select class="form-control3" name="character_console" id="character_console">
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
<!-- END_INSERT CHARACTER CONSOLE -->
<!-- CANCEL AND INSERT BUTTONS -->
<tr>
<td>
<input name="add" type="submit" id="add" value="Add Character" class="btn btn-primary">
<button type="button" class="btn btn-primary" onclick="popup('popUpDiv')" style="float: right; margin-right: 5px;">  
<a href="#" style="color: white;">Cancel</a></button>
</td>
</tr>
<!-- END_CANCEL AND INSERT BUTTONS -->
</table><!-- END_POPUPTABLE -->
</form><!-- END_END POPUP FORM SUBMISSION -->
</div><!-- END_POPUPDIV -->	

<!-- LIST CHARACTER BUTTON -->
<button type="button" class="btn btn-primary btn-lg" onclick="popup('popUpDiv')" style="right: 0; float: right;">  
<a href="#" style="color: white;">List my Character</a></button> 
<!-- END_LIST CHARACTER BUTTON -->

<!-- START TABLE FILTERS -->
<h2  class="btn btn-primary">Filter</h2>
<div class="filter_group">
<!--DROPDOWN_FILTERS-->
<div class="input-group">
<select ng-model="orderProp" class="form-control">
  <option value="">All Consoles</option>
  <option value="Xbox One">Xbox One</option>
  <option value="Xbox 360">Xbox 360</option>
  <option value="Playstation 4">Playstation 4</option>
  <option value="Playstation 3">Playstation 3</option>
    <option value="PC">PC</option>
</select>
</div>

<div class="input-group">
<select ng-model="orderProp4" class="form-control">
  <option value="">All Regions</option>
  <option value="North America">North America</option>
  <option value="South America">South America</option>
  <option value="Europe">Europe</option>
  <option value="Asia">Asia</option>
  <option value="Oceania">Oceania</option>
</select>
</div>

<div class="input-group">
<select ng-model="orderProp2" class="form-control">
  <option value="">All Classes</option>
  <option value="Xbox One">Xbox One</option>
  <option value="Xbox 360">Xbox 360</option>
  <option value="Playstation 4">Playstation 4</option>
  <option value="Playstation 3">Playstation 3</option>
    <option value="PC">PC</option>
</select>
</div>

<div class="input-group">
<select ng-model="orderProp3" class="form-control">
                <option value="">All Activities</option>
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
</div>

<!--SEARCH_FILTER-->
<div class="filter_search">
<div class="row">
  <div class="col-lg-9">
    <div class="input-group">
      <input  type="text" ng-model="searchFilter" class="form-control2" placeholder="Search Any Key Term">
            <input type="submit" name="search" class="form-control2" style="position: absolute; left: -9999px">
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->
</div>
<br />
<br />
<a href="<?php echo curPageURL(); ?>">
<span class="glyphicon glyphicon-refresh" style="margin-left: 2em; color: white; background-color:#428bca; padding: 6px;"></span></a>
<br />
</div>
<br />
<br />
<h5 style="float:right;">Listings Last: 925440 Minutes</h5>
<hr />
<!-- END_OF FILTERS -->
<!-- START OF ANGULAR TABLE -->
<div ng-controller="dbCtrl" id="results">
<table class="table">
<thead>
<tr>
					<th>Character Info</th>
					<th>Game Type</th>
					<th>Region</th>
					<th>Time Listed</th>

</tr>
</thead>
<tbody>
<tr ng-repeat="characters in data | filter:searchFilter | filter:orderProp | filter:orderProp2 | filter: orderProp3 | filter:orderProp4">
					<td><b class="rowBold"><a href="http://xbox.com/{{characters.character_name}}">{{characters.character_name}}</a></b> {{characters.character_level}} <br />{{characters.character_console}}</td>
					<td><b class="descBold">{{characters.character_activity}}</b><br />{{characters.character_description}}</td>
					<td>{{characters.character_region}}</td>
					<td>{{characters.list_date}}</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
 <!-- END_OF ANGULAR TABLE-->  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">

</body>
</html>
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