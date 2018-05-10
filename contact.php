<!DOCTYPE html>
	<html>
		<head>
			<link rel="stylesheet" href="contact.css">

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

	<div id="contact3">
	<p id="contact2" ">Pentru informatii suplimentare legate de activitatea companiei AGLR va rugam sa ne contactati la:</p>
	<p id="contact2">AGLR ROMANIA SRL</p>
	<p id="contact2">Splaiul Unirii nr. 16, et.7, cam. 703</p>
	<p id="contact2">Bucuresti, România</p>
	<p id="contact2">Tel.: 0738 853 911</p>
	<p id="contact2">e-mail: romania@aglr.com</p>
	<p id="contact2">Registrul Comertului: J40/8080/2013</p>
	<p id="contact2">Cod Fiscal : RO 31922515</p>


	<form id="contact2";style="color: black;">
			 Nume:<br>
			  <input type="text" name="firstname"><br><br>
			  Prenume:<br>
			  <input type="text" name="firstname"><br><br>
			  Adresa email:<br>
			  <input type="text" name="firstname"><br><br>
			  Numar telefon:<br>
			  <input type="number" name="firstname"><br><br>
			  Suprafata:<br>
			  <input type="text	" name="firstname"><br><br>
			  <input type="submit">
	</form>
</div>



	







	<p id="copyright">&copy; 2018 AgLr.com<p>

	



<div id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat: 44.423313, lng: 26.109298};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDLMJmeyolsCSK9I-o9qIygvxLl9izrANo&callback=initMap">
    </script>









</body>



</html>






