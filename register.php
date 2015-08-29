<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TVZ Board</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <?php
  	session_start();
  	if($_SESSION['user'] != NULL){
		header("Location:index.php");
  	}
  ?>
    
	<div class="navbar navbar-inverse nabvar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">TVZ Board</a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">I godina<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li class="dropdown-header">1. semestar</li>
							<li><a href="./trazi.php?kolegij=Fizika">Fizika</a></li>
							<li><a href="./trazi.php?kolegij=Matematika">Matematika</a></li>
							<li><a href="./trazi.php?kolegij=Primjena Računala">Primjena Računala</a></li>
							<li><a href="./trazi.php?kolegij=Programiranje">Programiranje</a></li>
							<li><a href="./trazi.php?kolegij=Engleski jezik">Engleski jezik</a></li>
							<li><a href="./trazi.php?kolegij=Njemački jezik">Njemački jezik</a></li>
							<li class="divider"></li>
							<li class="dropdown-header">2. semestar</li>
							<li><a href="./trazi.php?kolegij=Matematika 2">Matematika II</a></li>
							<li><a href="./trazi.php?kolegij=Objektno Orijentirano Programiranje">OOP</a></li>
							<li><a href="./trazi.php?kolegij=Osnove Elektrotehnike">OEE</a></li>
							<li><a href="./trazi.php?kolegij=Uvod u Web Tehnologije">UWT</a></li>
							<li><a href="./trazi.php?kolegij=Poslovni engleski jezik">Poslovni engleski jezik</a></li>
							<li><a href="./trazi.php?kolegij=Poslovni njemački jezik">Poslovni njemački jezik</a></li>

						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">II godina<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li class="dropdown-header">3. semestar</li>
							<li><a href="./trazi.php?kolegij=Algoritmi i Strukture Podataka">Algoritmi i strukture podataka</a></li>
							<li><a href="./trazi.php?kolegij=Arhitektura Računala">Arhitektura računala</a></li>
							<li><a href="./trazi.php?kolegij=Operacijski Sustavi">Operacijski sustavi</a></li>
							<li><a href="./trazi.php?kolegij=Programiranje u Jeziku Jawa">Programiranje u jeziku Java</a></li>
							<li><a href="./trazi.php?kolegij=Vjerojatnost i Statistika">Vjerojatnost i statistika</a></li>
							<li class="divider"></li>
							<li class="dropdown-header">4. semestar</li>
							<li><a href="./trazi.php?kolegij=Baze Podataka">Baze podataka</a></li>
							<li><a href="./trazi.php?kolegij=Programski Alati u Programiranju">Programski alati u programiranju</a></li>
							<li><a href="./trazi.php?kolegij=Računalne Mreže">Računalne mreže</a></li>
							<li><a href="./trazi.php?kolegij=Uvod u UNIX Sustave">Uvod u UNIX sustave</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">II godina<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li class="dropdown-header">5. semestar</li>
							<li><a href="./trazi.php?kolegij=Administracija Računalnih Mreža">Administracija računalnih mreža</a></li>
							<li><a href="./trazi.php?kolegij=Administriranje UNIX Sustava">Administriranje UNIX sustava</a></li>
							<li><a href="./trazi.php?kolegij=Seminar">Seminar</a></li>
							<li class="divider"></li>
							<li class="dropdown-header">6. semestar</li>
							<li><a href="./trazi.php?kolegij=Završni Rad">Završni rad</a></li>
						</ul>
					</li>
					<li><a href="#contact" data-toggle="modal">Kontakt</a></li>
						<?php
							if($_SESSION['user'] == NULL){
							
								//echo '<li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a></li>';
								echo '<li>';
								echo '<a href="#" data-toggle="modal" data-target="#login-modal">';
								echo 'Prijava';
								echo '</a></li>';

							}else{
								echo '<li><a href="logout.php">Odjava</li></a>';
							}
						?>
				</ul>
			</div> <!--/.nav-collapse -->
		</div>
	</div>

  
	
	<div class="container-fluid">
	    <section class="container">
			<div class="container-page">				
				<div class="col-md-6">
					<h3 class="dark-grey">Registracija</h3>
					
					<form action="register.php" method="POST">
					<div class="form-group col-lg-12">
						<label>Korisničko ime</label>
						<input type="" name="username" class="form-control" id="" value="">
					</div>
					
					<div class="form-group col-lg-6">
						<label>Lozinka</label>
						<input type="password" name="password" class="form-control" id="" value="">
					</div>
					
					<div class="form-group col-lg-6">
						<label>Ponovi Lozinku</label>
						<input type="password" name="password2" class="form-control" id="" value="">
					</div>
									
					<div style="margin-left: 25%;" class="form-group col-lg-6">
						<label>Email Adresa</label>
						<input type="email" name="email" class="form-control" id="" value="">
					</div>	
					
				
				</div>
			
				&nbsp
				<div class="col-md-6">
					<h3 class="dark-grey">Uvjeti korištenja</h3>
					<p>
						Ukoliko se odlučite na registraciju na stranici, prihvaćate uvjete TVZ Boarda!
					</p>
					<p>
						Nemojte spamati i pomagajte kolegama.Nemojte spamati i pomagajte kolegama.Nemojte spamati i pomagajte kolegama.
					</p>
					<p>
						Should there be an error in the description or pricing of a product, we will provide you with a full refund (Paragraph 13.5.6)
					</p>
					<p>
						Nemojte spamati i pomagajte kolegama.Nemojte spamati i pomagajte kolegama.
					</p>
					
					<button style="float:left;" type="submit" name="submit" class="btn btn-primary">Registracija</button>
				</div>
			</div>
			</form>
		</section>
	</div>

	<?php
	if(isset($_POST['submit'])){

		include 'includes/connection.php';

		$username = $_POST['username'];
		$username = mysqli_real_escape_string($conn, $username);
		$password = md5($_POST['password']);
		$password2 = md5($_POST['password2']);
		$email = $_POST['email'];
		$email = mysqli_real_escape_string($conn, $email);
		$role = "korisnik";


		//Provjera da li su inputi prazni
		function is_empty($password, $username, $email){
		if(empty($password) || empty($username) || empty($email))
			{
				echo '<div class="alert alert-warning" role="alert">Sva polja moraju biti ispunjena!</div>';
				header("Refresh:2;url=registracija.php");
				return false;
			}else{
				return true;
			}
		}

		//duljina passworda
		function pass_length($password){
			if(strlen($password) < 6){
				echo '<div class="alert alert-warning" role="alert">Lozinka mora imati više od 6 znakova!</div>';
				header("Refresh:2;url=registracija.php");
				return false;
			}else{
				return true;
			}
		}

		// Funkcija za provjeru emaila
		function is_valid_email($email){
		global $conn;
		$string = "SELECT * FROM tvu WHERE email = '$email'";
		$query = mysqli_query($conn, $string);
			if(mysqli_num_rows($query) > 0)
			{
				echo '<div class="alert alert-warning" role="alert">E-mail već postoji u bazi!</div>';
				echo "</br>";
				header("Refresh:2;url=registracija.php");
				return false;
			}else
			{
				return true;
			}
		}

		// Funkcija za provjeru passworda
		function is_valid_password($password, $password2){
			if($password != $password2){
				echo '<div class="alert alert-warning" role="alert">Lozinke se ne poklapaju!</div>';
				echo "</br>";
				header("Refresh:2;url=registracija.php;");
			}else{
				return true;
			}
		}

		//Kreiranje korisnika
		function create_user($username, $password, $email, $role){
			global $conn;
			$sql = "INSERT INTO tvu (ID, username, password, email, role) 
				VALUES (NULL, '$username', '$password', '$role', 'korisnik')";
			$result = mysqli_query($conn, $sql);
			if($result){
							  return true; // Uspjeh
							}else{
							  return false; // BUUUU
							}
						}


		// Početak učitavanja
			if (is_valid_email($email) && pass_length($password) && is_valid_password($password,$password2) && is_empty($password, $username, $email))
			{
				if (create_user($username, $password, $kontaktbroj, $email)) {
					echo '<div class="alert alert-success" role="alert">Uspješno ste se registrirali!</br>Ubrzo će te biti prebačeni na početnu stranicu!</div>';		
					echo 'Ako se automatski ne prebaci, kliknite <a href="login.php">ovdje</a>';	
						header("Refresh:2;url=index.php");
						}else{
							echo 'Greška!';
							header("url=registracija.php");
						}
					}


		}
	?>

	<!-- footer -->
	<div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
		<div class="container">
		
			<div class="navbar-text pull-left">
				<p>&copy 2015 TVZB</p>
			</div>
			<div class="navbar-text pull-right">
				<a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
				<a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
				<a href="#"><i class="fa fa-google-plus fa-2x"></i></a>
			</div>
		
		</div>
	</div>
	
	<!-- Bootstrap core JS
	********************************************************* -->
	<div class="modal fade" id="contact" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<form class="form-horizontal" role="form" action="output.php" method="post">
					<div class="modal-header">
						<h4 class="text-center">Kontakt</h4>
					</div>
					<div class="modal-body">
						<div class="form-group">
					        <label for="name" class="col-sm-2 control-label">Ime</label>
					        <div class="col-sm-10">
					            <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="">
					        </div>
					    </div>
					    <div class="form-group">
					        <label for="email" class="col-sm-2 control-label">Email</label>
					        <div class="col-sm-10">
					            <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
					        </div>
					    </div>
					    <div class="form-group">
					        <label for="message" class="col-sm-2 control-label">Poruka</label>
					        <div class="col-sm-10">
					            <textarea class="form-control" rows="4" name="message"></textarea>
					        </div>
					    </div>
					</div>
							<div class="modal-footer">
								<button type="submit" name="submit" id="submit" name="submit" class="btn btn-primary">Pošalji!</button></input>
								<a class="btn btn-default" data-dismiss="modal">Zatvori</a>
							</div>
						</form>
			</div>
		</div>
	</div>
	
	
	

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>