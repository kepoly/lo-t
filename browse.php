<html>
<?php 
require 'inc/header.php';
?>
<div id="wrapper">
						<!-- Sidebar -->
<div id="sidebar-wrapper">
    <ul class="sidebar-nav">
    <br />
	<br />
    <center><h1 style="color: white;">LK4T</h1>
    <br />
    <h4 style="color: white;">&nbsp;Browse</h4>
    <hr />
                                 <li>
                <a href="#">All Games</a>
                </li>
                <li>
                <a href="#">Featured Title</a>
                </li>

            </ul>
            </center>
        </div>
        <!-- /#sidebar-wrapper -->

        <div id="page-content-wrapper">
            <div class="container-fluid">
            <br />
            <br />
                        <br />
                <div class="row">
                    <div class="col-lg-12">

  <div style="width: 600px;">
                    <div style="width: 20%; margin: 0; float:left">
                    <button href="#menu-toggle" id="menu-toggle" type="button" class="btn btn-sm" aria-label="Left Align">
  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
</button></div>
<div style="width: 80%; float:right">
                        <h1 style="margin:0">Find Your Game</h1><p>(Only bf4 and destiny are active atm)</p></div> </div>                       
                    </div>
                </div>
<hr />
        <div class="row">
            <div class="col-md-3">
                <center><h3 class="ellipsis">League of Legends</h3></center>
                <center><img src="img/lolGame.jpg" width="150px" height="250px"></center>
            </div>
            <div class="col-md-3">
                <center><h3 class="ellipsis">World of Warcraft</h3></center>
            	<center><img src="img/wowGame.jpg" width="150px" height="250px"></center>

            </div>
            <div class="col-md-3">
                <center><h3>Diablo 3</h3></center>
                <center><img src="img/diabloGame.jpeg" width="150px" height="250px"></center>

            </div>
            <div class="col-md-3">
                <center><h3>Ghost Recon</h3></center>
                <center><img src="img/grGame.jpg" width="150px" height="250px"></center>
            </div>
        </div> 
       
        <hr />
                 <div class="row">
            <div class="col-md-3">
                <center><h3 class="ellipsis">Dota 2</h3></center>
                <center><img src="img/dotaGame.jpg" width="150px" height="250px"></center>
            </div>
            <a href="games/destiny">
            <div class="col-md-3">
                <center><h3>Destiny</h3></center>
            	<center><img src="img/desGame.png" width="150px" height="250px">
</center>

            </div></a>
            <div class="col-md-3">
                <center><h3 class="ellipsis">Counter Strike Global Offensive</h3></center>
                <center><img src="img/csgGame.jpg" width="150px" height="250px"></center>

            </div>
            <div class="col-md-3">
                <center><h3 class="ellipsis">Call of Duty Advanced Warfare</h3></center>
                <center><img src="img/codGame.jpg" width="150px" height="250px"></center>
            </div>
        </div> 
        <hr />
         <div class="row">
         <a href="games/battlefield4">
            <div class="col-md-3">
                <center><h3 class="ellipsis">Battlefield 4</h3></center>
                <center><img src="http://img4.wikia.nocookie.net/__cb20130329064559/battlefield/images/e/ee/Battlefield_4_Cover.jpg" width="150px" height="250px"></center>
            </div></a>
            <a href="#">
            <div class="col-md-3">
                <center><h3>Minecraft</h3></center>
            	<center><img src="img/desGame.png" width="150px" height="250px">
</center>

            </div></a>
                     <a href="#">

            <div class="col-md-3">
                <center><h3 class="ellipsis">Sunset Overdrive</h3></center>
                <center><img src="img/csgGame.jpg" width="150px" height="250px"></center>

            </div></a>
                     <a href="#">

            <div class="col-md-3">
                <center><h3 class="ellipsis">Forza 2</h3></center>
                <center><img src="img/codGame.jpg" width="150px" height="250px"></center>
            </div></a>
        </div> 
   <hr />


<!-- Finish Displaying Employee Table -->
<nav class="navbar navbar-default navbar-fixed-bottom" style="background:black;">
<div class="container">
					<div id="footerDiv">
					<ul class="nav navbar-nav">
  <li><a href="#">About</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Developers</a></li>
                    <li><a href="#">Terms</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                	<li><a href="#">Contact Us</a></li>
                </ul>
</div>
</div>
</nav>






            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
    
</body>
<!-- Finish Body -->
</html>