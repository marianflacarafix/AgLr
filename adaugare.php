<!DOCTYPE>
<HTML>
	<head>
		<link rel="stylesheet" href="adaugare2.css">
	</head>

	<body>

<?php
    session_start();
	?>
	
	<div class = "menu">
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




        <h1 id="titlu">ADAUGARE TEREN</h1>

        <form id="formular">
			  Numar parcela:<br>
			  <input type="number" name="firstname"><br><br>
			  Suprafata:<br>
			  <input type="number" name="lastname"><br><br>
			  Culturi pretabile:<br>
			  <input list="Culturi">
			  <datalist id="Culturi">
			    <option value="Ovaz">
			    <option value="Grau">
			    <option value="Porumb">
			    <option value="Soia">
			    <option value="Lucerna">
			  </datalist> <br><br>
			  Valoare:<br>
			  <input type="number" name="firstname"><br><br>
			  Riscuri:<br>
			  <input type="text" name="firstname"><br><br>
			  Mentiuni:<br>
			  <input type="text" name="firstname"><br><br>
			  Numar cadastral:<br>
			  <input type="number" name="firstname"><br><br>
			  <p>Tip teren:</p>
			  <select name="Tip teren">
			    <option value="volvo">Vilan</option>
			    <option value="saab">Extravilan</option>
			  </select><br><br>
			  Alte date:<br>
			  <input type="text" name="firstname"><br>	<br>
			  <input type="submit">
		</form>

		<p id="copyright">&copy; 2018 AgLr.com<p>

	


	</body>



</html>