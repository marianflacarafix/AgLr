<!DOCTYPE html>
	<html>
		<head>
			<link rel="stylesheet" href="despre.css">

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
		
	<h1 style="color:blue;margin-left: 150px;margin-top: 100px;">Program de gestiune</h1>
		<h2 id="paragraf3">-urmarire loturi de culturi agricole;</h2>
		<h2 id="paragraf3">-permite intregistrarea fiecarei parcele, tarla sau hectar  de pamant;</h2>
		<h2 id="paragraf3">-impartire terenuri pe categorii;</h2>
		<h2 id="paragraf3">-evidenta parcelelor pe locatii;</h2>
		<h2 id="paragraf3">-informatiile pot fi exportate;</h2>
		<h2 id="paragraf3">-informatiile pot fi importate;</h2>


<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d5280.612048881959!2d27.38274318585684!3d47.14558830580248!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sro!2sro!4v1525893963325" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>


	<p id="copyright">&copy; 2018 AgLr.com<p>

	



</body>



</html>






