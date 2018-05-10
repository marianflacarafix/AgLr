<!DOCTYPE html>
	<html>
		<head>
			<link rel="stylesheet" href="noutati.css">

		</head>

	
	<body> 
	
	<?php
    session_start();
	?>
	
	<div id = "menu">
		<ul>
	        <li><a href="user.php">Acasa</a></li>
	  		<li><a href="noutati.php">Noutati</a></li>	
		    <li><a href="contact.php">Contact</a></li>
		    <li><a href="despre.php">Despre noi</a></li>
		    <li><a href="logout.php">Logout</a></li>
		    <li id = "account" style = "float:right">
		    	<a>
			    	<?php 
						if(isset($_SESSION['nume']))
							echo "Logat ca:  " . $_SESSION['nume'];
						else
							header("Location: register.php");
					?>
				</a>
			</li>
		</ul>
	</div>
		

	<h2 style="color:black ; margin-left: 60px; margin-top: 100px;">   AGLR este prezenta în România din 2006 printr-un parteneriat comercial cu asociatia GEER (Grup de Expertiza în Economia Rurala), ca urmare a initiativei unui grup de fermieri români.

În urma unui workshop, organizat în Franta de catre Optitech Club – Syngenta, acest grup a decis sa acorde o atentie speciala managementului si gestiunii pentru optimizarea activitatilor din exploatatiile agricole, constatându-se existenta acelorasi nevoi si în România.

În 2011, AGLR continua sa se extinda prin crearea unei filiale proprii la Bucuresti. Compania începe sa fie prezenta ca entitate locala.

 </h2>













	<p id="copyright">&copy; 2018 AgLr.com<p>

	



</body>



</html>






