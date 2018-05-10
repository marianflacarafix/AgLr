<!DOCTYPE html>
<html>
	<?php 
		include 'header.php';
		include 'settings.php';
      	include 'functions.php';
		session_start();
        if(isset($_SESSION['nume'])){
        	header("Location: user.php");
        }
	?>
  	<body>
		<div class="container centered">
			<div class="form-structor">
				<div class="signup">
					<h2 class="form-title" id="signup"><span>or</span>Sign up</h2>
					<form method = "post">
						<div class="form-holder">
							<input type="text" name = "name" class="input" placeholder="Name" />
							<input type="password" name = "password" class="input" placeholder="Password" />
						</div>
						<input name = "register" type="submit" class="submit-btn" value = "Sign up"></input>
					</form>

					<?php

				        if(isset($_POST['register']) && isset($_POST['name']) && isset($_POST['password']) && $_POST['name'] && $_POST['password']){

			            // Create connection
			            $conn = new mysqli($servername, $username, $password, $dbname);

			            // Check connection
			            if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

			            // prepare and bind
			            $stmt = $conn->prepare("SELECT nume FROM utilizatori WHERE nume = ?");
			            $stmt->bind_param("s", $nume);

			            $nume = preventInjection($conn,$_POST['name']);
			            $parola = preventInjection($conn,$_POST['password']);
			            $parola = password_hash($parola, PASSWORD_DEFAULT);

			            $stmt->execute();

			            /* store result */
			            $stmt->store_result();

			            /* bind result variables */
			            $stmt->bind_result($name);

			            if($stmt->num_rows > 0){
			              echo "<h3 style = 'font-style: italic;' class = 'txtaC'> Numele exist&#259; deja &#238;n baza de date!</h3>";
			            }
			            else{
			                // prepare and bind
			                $stmt = $conn->prepare("INSERT INTO utilizatori (nume, parola) VALUES (?, ?)");
			                $stmt->bind_param("ss", $nume, $parola);
			                $stmt->execute();
			                echo "<h3 style = 'font-style: italic;' class = 'txtaC col-xs-12'> Contul a fost creat!</h3>";
			            }
			              
			            /* close statement */
			            $stmt->close();

			          	/*close connection*/
			            $conn->close();

			          }
			          else if(isset($_POST['register']))
			             echo "<h3 style = 'font-style: italic;' class = 'txtaC col-xs-12'> Te rug&#259;m s&#259; introduci toate datele!</h3>";
			        ?>
				</div>
				<div class="login slide-up">
						<div class="center">
								<h2 class="form-title" id="login"><span>or</span>Log in</h2>
								<form method = "post">
									<div class="form-holder">
										<input type="text" name = "name_login" class="input" placeholder="Name" />
										<input type="password" name = "password_login" class="input" placeholder="Password" />
									</div>
									<input name = "login" type="submit" class="submit-btn" value = "Log in"></input>
								</form>
						</div>
					<?php
						if(isset($_POST['login']) && isset($_POST['name_login']) && isset($_POST['password_login']) && $_POST['name_login'] && $_POST['password_login']){

					            // Create connection
					            $conn2 = new mysqli($servername, $username, $password, $dbname);

					            // Check connection
					            if ($conn2->connect_error) die("Connection failed: " . $conn2->connect_error);

					            // prepare and bind
					            $stmt = $conn2->prepare("SELECT nume,parola FROM utilizatori WHERE nume = ?");
					            $stmt->bind_param("s", $nume);

					            $nume = preventInjection($conn2,$_POST['name_login']);
					            $parola = preventInjection($conn2,$_POST['password_login']);

					            $stmt->execute();

					            /* store result */
					            $stmt->store_result();

					            /* bind result variables */
					            $stmt->bind_result($name, $pass);

					            if($stmt->num_rows > 0){
					              $stmt->fetch();
					              $pass = trim($pass);
					              if (password_verify($parola, $pass)) {
					                    $_SESSION['nume'] = $nume;
					                    header('Location: user.php');
					              }
					            }
					            else
					              echo "<h3 style = 'font-style: italic;' class = 'txtaC col-xs-12'> Nu ai introdus datele corecte!</h3>";

					            /* close statement */
					            $stmt->close();

					          /*close connection*/
					            $conn2->close();

					          }		
					?>
				</div>
			</div>
			 <?php include 'footer.php'; ?> 
		</div>
	</body>
</html>