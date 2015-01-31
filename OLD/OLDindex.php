<!DOCTYPE html>
<?php 
require 'inc/header.php';
?>

        <!-- Page Content -->
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
                        <h1 style="margin:0">Looking for Team</h1></div> </div>                       
                    </div>
                </div>


<hr />

<center><h2>Featured Title </h2></center>
<div style="width: 100%; height: 450px; background-color: rgba(0,0,0,0.1);">
<div style="float:left; width: 700px; background-color: rgba(0,0,0,0.1);">
<img src="http://upload.wikimedia.org/wikipedia/en/b/be/Destiny_box_art.png" width="450px" height="450px">
<div style="float: right; margin-right: 20px;">
<h3>Destiny: Guardians</h3>
<p style="float: right; width: 200px;">Destiny is a first-person shooter developed by Bungie, the creators of the Halo series. 
Destiny was released on September 9th, 2014 for Playstation 3, Playstation 4, Xbox One, and Xbox 360.</p>
</div>
</div>
</div>
   
<br />

<!-- Finish Displaying Employee Table -->
    <nav id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-bottom" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbarCollapse1">
                <ul class="nav navbar-nav">
                    <li><a href="../index.php">About</a></li>
                    <li><a href="../games.php">Blog</a></li>
                    <li><a href="#">Developers</a></li>
                    <li><a href="#">Getting Started</a></li>
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