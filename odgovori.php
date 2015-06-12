<?php

	include 'includes/connection.php';
	
	$ad = $_GET['id'];
	$query = "SELECT * FROM tva WHERE ID = '$ad'";
	$result = mysql_query($query);
	$person = mysql_fetch_array($result);
	
?>

<?php
							
							include 'includes/connection.php';
							
							if (isset($_GET['id'])) {
							$member = $_GET['id'];
								}
								session_start();
							  $_SESSION['ajdi'] = $member;
							?>
			
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
					<li class="active"><a href="index.php">Početna</a></li>
					<li class="default"><a href="pitanje.php">Postavi Pitanje!</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">I godina<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li class="dropdown-header">1. semestar</li>
							<li><a href="#">Programiranje</a></li>
							<li><a href="#">uvod u WEB tehnologije</a></li>
							<li><a href="#">OOP</a></li>
							<li class="divider"></li>
							<li class="dropdown-header">2. semestar</li>
							<li><a href="#">Baze podataka</a></li>
							<li><a href="#">Arhitektura računala</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">II godina<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li class="dropdown-header">1. semestar</li>
							<li><a href="#">Programiranje</a></li>
							<li><a href="#">uvod u WEB tehnologije</a></li>
							<li><a href="#">OOP</a></li>
							<li class="divider"></li>
							<li class="dropdown-header">2. semestar</li>
							<li><a href="#">Baze podataka</a></li>
							<li><a href="#">Arhitektura računala</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">II godina<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li class="dropdown-header">1. semestar</li>
							<li><a href="#">Programiranje</a></li>
							<li><a href="#">uvod u WEB tehnologije</a></li>
							<li><a href="#">OOP</a></li>
							<li class="divider"></li>
							<li class="dropdown-header">2. semestar</li>
							<li><a href="#">Baze podataka</a></li>
							<li><a href="#">Arhitektura računala</a></li>
						</ul>
					</li>
					<li><a href="#contact" data-toggle="modal">Kontakt</a></li>
				</ul>
			</div> <!--/.nav-collapse -->
		</div>
	</div>
	
	<!-- POCETAK -->	
	
	<div class="container">
		<div class="jumbotron text-center">
			<h1>TVZ Board</h1>
			<p>Postavite pitanje!</p>
		</div>

		
				  <?php
				include 'includes/connection.php';
					
					
						echo '<div style="background-color: #eeeeee;" class=".col-xs-12 .col-md-8">';
						echo "<h3>" . "Pitanje #" . $person['ID'] . " iz " . $person['Kategorija'] . "</h3>";
						echo "<h4>" . $person['Pitanje'] . "</h4>";
						echo "<p>" . "Pitanje postavio: " .  $person['Ime'] . "</p>";
						echo "<p>" . "Objavljeno: " . $person['Datum'] . "</p>";
						echo '</div>';

				?>
				
				  <?php
				include 'includes/connection.php';
				
					//Uzimanje ID-a preko sessiona i trazenje odgovora za odredeno pitanje
					$konacno = $_SESSION['ajdi'];
					$query = "SELECT * FROM tvo WHERE Br = '$konacno'";
					$result = mysql_query($query);
					$osoba = mysql_fetch_array($result);
					
					//brojac redova
					$brodg = mysql_num_rows($result);

					//Ispis prvog retka u tablici koji se ne ispisuje
					if($brodg == 0)
					{
						echo '<div class="alert alert-danger" role="alert">Trenutno nema odgovora :(</div>';
						}else{
						echo "<hr>";
						echo '<div style="background-color: #eeeeee;" class=".col-xs-12 .col-md-8">';
						echo "<h3>" .  $osoba['Odgovor'] . "</h3>";
						echo "<p>" . "Odgovorio: " . $osoba['Nick'] . "<br/>" . "Datum: " . $osoba['Datum'];
						echo '</div>';
					}
						
					
					
					while($osoba = mysql_fetch_array($result))
					{
						
						echo "<hr>";
						echo '<div style="background-color: #eeeeee;" class=".col-xs-12 .col-md-8">';
						echo "<h3>" .  $osoba['Odgovor'] . "</h3>";
						echo "<p>" . "Odgovorio: " . $osoba['Nick'] . "<br/>" . "Datum: " . $osoba['Datum'];
						echo '</div>';

					
					}
				?>
				
			
		<!-- FORMA ZA ODGOVORE -->	
		
			<div class=".col-xs-6 .col-md-4">
			<div class="odg">
				<h2>&nbspPomozite kolegi i napišite odgovor!</h2>
				<form action="odgovor.php" method="POST">
					<div class="form-group">
						<label for="Nick" class="col-sm-2 control-label">Ime:</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="Nick" name="Nick" required placeholder="Ime ili Nadimak">
							<br /></div>
					</div>
					<div class="form-group">
									<label for="Odgovor" class="col-sm-2 control-label">Odgovor:</label>
									<div class="col-sm-10">
										<textarea class="form-control" id="Odgovor" name="Odgovor" rows="4" placeholder="Vaš odgovor" required></textarea>
									<br /></div>
								</div>
								<input type="submit" id="submit" name="submit" value="Odgovori!" /> 
								<br>
								</form>	
								<br />
					</div>
							
			</div>
		
	</div>
	
	
	<!-- footer -->
	<div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
		<div class="container">
		
			<div class="navbar-text pull-left">
				<p>&copy 2014 TVZB</p>
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
						
								<label for="kontakt_ime" class="col-sm-2 control-label">Ime:</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="kontakt_ime" name="kontakt_ime" placeholder="Ime ili Nadimak">
								</div>
							</div>
							<div class="form-group">
								<label for="kontakt_email" class="col-sm-2 control-label">E-mail:</label>
								<div class="col-sm-10">
									<input type="email" class="form-control" id="kontakt_email" name="kontakt_email" placeholder="Vaša E-mail adresa">
								</div>
							</div>
							<div class="form-group">
								<label for="kontakt_rijedlog" class="col-sm-2 control-label">Prijedlog:</label>
								<div class="col-sm-10">
									<textarea class="form-control" id="kontakt_prijedlog" name="kontakt_prijedlog" rows="4" placeholder="Kako bi Vi unaprijedili stranicu?"></textarea>
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