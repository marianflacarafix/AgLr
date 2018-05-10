<!DOCTYPE>
<html>
	<head>
		<link rel="stylesheet" href="tabel2.css">
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







        <h1 id="titlu">TERENURI ACTUALE</h1>
		
		<table border="1">
        
        <tr id="back">
            <td id="fer" rowspan="2">Nr. teren</td>
            <td id="fer"  rowspan="2">Nr. parcela</td>
            <td  id="fer" rowspan="2">Suprafata (Hectare)</td>
            <td  id="fer" rowspan="2">Culturi pretabile</td>
            <td  id="fer" rowspan="2">Valoare (euro)</td>
            <td id="fer"  rowspan="2">Riscuri</td>
            <td  id="fer" rowspan="2">Mentiuni</td>
            <td  id="fer" colspan="2" align="center">Informatii cadastrale</td>
            <td  id="fer" rowspan="2">Alte date</td>
        </tr>
        <tr id="back2">
            <td id="fer3" >Nr.cadastral</td>
            <td id="fer3" >Tip teren</td>
        </tr>
        <tr>
            <td  id="fer2" >1</td>
            <td id="fer2" >23</td>
            <td id="fer2" >2 ha</td>
            <td id="fer2" >grau, orz</td>
            <td id="fer2" >2560 euro</td>
            <td id="fer2" >Deseuri toxice pe 1% din suprafata</td>
            <td id="fer2" >Prezinta stalpi de tensiune</td>
            <td id="fer2" >124</td>
            <td id="fer2" >extravilan</td>
            <td id="fer2" >In zona este o fabrica de cauciucuri</td>
        </tr>
        <tr>
            <td id="fer2" >2</td>
            <td id="fer2" >15</td>
            <td id="fer2" >5</td>
            <td id="fer2" >porumb</td>
            <td id="fer2" >6400 euro</td>
            <td id="fer2" >-</td>
            <td id="fer2" >Prezinta stalpi de tensiune</td>
            <td id="fer2" >86</td>
            <td id="fer2" >extravilan</td>
            <td id="fer2" >-</td>
        </tr>
        <tr>
            <td id="fer2" >2</td>
            <td id="fer2" >15</td>
            <td id="fer2" >5</td>
            <td id="fer2" >porumb</td>
            <td id="fer2" >6400 euro</td>
            <td id="fer2" >-</td>
            <td id="fer2" >Prezinta stalpi de tensiune</td>
            <td id="fer2" >86</td>
            <td id="fer2" >extravilan</td>
            <td id="fer2" >-</td>
        </tr>
        <tr>
            <td id="fer2" >2</td>
            <td id="fer2" >15</td>
            <td id="fer2" >5</td>
            <td id="fer2" >porumb</td>
            <td id="fer2" >6400 euro</td>
            <td id="fer2" >-</td>
            <td id="fer2" >Prezinta stalpi de tensiune</td>
            <td id="fer2" >86</td>
            <td id="fer2" >extravilan</td>
            <td id="fer2" >-</td>
        </tr>
        <tr>
            <td id="fer2" >2</td>
            <td id="fer2" >15</td>
            <td id="fer2" >5</td>
            <td id="fer2" >porumb</td>
            <td id="fer2" >6400 euro</td>
            <td id="fer2" >-</td>
            <td id="fer2" >Prezinta stalpi de tensiune</td>
            <td id="fer2" >86</td>
            <td id="fer2" >extravilan</td>
            <td id="fer2" ><select name="cars">
			    <option value="volvo">Vilan</option>
			    <option value="saab">Extravilan</option>
			  </select>
			</td>
        </tr>
        <tr>
            <td id="fer2" >2</td>
            <td id="fer2" >15</td>
            <td id="fer2" >5</td>
            <td id="fer2" >porumb</td>
            <td id="fer2" >6400 euro</td>
            <td id="fer2" >-</td>
            <td id="fer2" >Prezinta stalpi de tensiune</td>
            <td id="fer2" >86</td>
            <td id="fer2" >extravilan</td>
            <td id="fer2" >-</td>
        </tr>

    </table>
  
    <a style="margin-left:450px;" href="harta.php"><h1>Vizualizare harta</h1></a>



    <p id="copyright">&copy; 2018 AgLr.com<p>



	</body>
</html>


<!--
</table>
		<table id="table2" style="width:100%">
			<tr>
				<th>Nr.teren</th>
				<th>Nr. parcela</th> 
				<th>Suprafata</th>
				<th>Culturi pretabile</th>
				<th>Valoare</th> 
				<th>Riscuri</th>
				<th>Informatii cadastrale</th>
				<th>Mentiuni</th> 
				<th>Alte date</th>
			</tr>
			<tr>
				<th>1</th>
				<th>23</th>
				<th>2 ha</th>
				<th>grau,orz</th>
				<th>2500 euro</th>
				<th>Deseuri toxice pe 1% din suprafata</th>
				<th>ere</th>
				<th>Prezinta stalpi de tensiune</th>
				<th>-</th>
			</tr>
		</table>