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
    <center><h1 style="color: white;">LK4G</h1>
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
                        <h1 style="margin:0">Find Your Game</h1></div> </div>                       
                    </div>
                </div>
<hr />
        <div class="row">
            <div class="col-md-3">
                <center><h3 class="ellipsis">League of Legends</h3></center>
                <center><img src="http://pcmedia.ign.com/pc/image/object/142/14287819/League-of-Legends_ver2FULL_US.jpg" width="150px" height="250px"></center>
            </div>
            <div class="col-md-3">
                <center><h3 class="ellipsis">World of Warcraft</h3></center>
            	<center><img src="http://upload.wikimedia.org/wikipedia/en/9/91/WoW_Box_Art1.jpg" width="150px" height="250px"></center>

            </div>
            <div class="col-md-3">
                <center><h3>Diablo 3</h3></center>
                <center><img src="http://aidanmoher.com/blog/wp-content/uploads/2012/05/Diablo3BoxArt.jpeg" width="150px" height="250px"></center>

            </div>
            <div class="col-md-3">
                <center><h3>Ghost Recon</h3></center>
                <center><img src="http://www.articles.gamerheadquarters.com/images/pc/ghostrecon/phantombox.jpg" width="150px" height="250px"></center>
            </div>
        </div> 
       
        <hr />
                 <div class="row">
            <div class="col-md-3">
                <center><h3 class="ellipsis">Dota 2</h3></center>
                <center><img src="http://0804789.studentplus.abertay.ac.uk/images/DOTApic.jpg" width="150px" height="250px"></center>
            </div>
            <a href="games/destiny.php">
            <div class="col-md-3">
                <center><h3>Destiny</h3></center>
            	<center><img src="http://upload.wikimedia.org/wikipedia/en/b/be/Destiny_box_art.png" width="150px" height="250px">
</center>

            </div></a>
            <div class="col-md-3">
                <center><h3 class="ellipsis">Counter Strike Global Offensive</h3></center>
                <center><img src="http://static.giantbomb.com/uploads/original/1/13692/2302957-i2cs9uzmq4yua.jpg" width="150px" height="250px"></center>

            </div>
            <div class="col-md-3">
                <center><h3 class="ellipsis">Call of Duty Advanced Warfare</h3></center>
                <center><img src="http://upload.wikimedia.org/wikipedia/en/3/3b/Advanced_Warfare.jpg" width="150px" height="250px"></center>
            </div>
        </div> 
        <hr />
        
   


<!-- Finish Displaying Employee Table -->
<nav class="navbar navbar-default navbar-fixed-bottom" style="background:black;">
					<div id="footerDiv">
					<ul class="nav navbar-nav">
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="../games.php">Browse</a></li>
                    <li><a href="#">Getting Started</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
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