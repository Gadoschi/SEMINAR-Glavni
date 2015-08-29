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
	
	<!-- POCETAK FORME -->	
	
	<div class="container">
		<div class="jumbotron text-center">
			<h1>TVZ Board</h1>
			<p>Postavite pitanje!</p>
			<form action="pitanje.php" method="post">
			
				<div class="form-group">
					<label for="Ime" class="col-sm-2 control-label">Ime:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="Ime" name="Ime" required placeholder="Ime ili Nadimak">
						<br /></div>
				</div>
							
				<div class="form-group">
					<label for="Kategorija" class="col-sm-2 control-label">Kategorija:</label>
						<div class="col-sm-10">
							<select class="form-control" id="Kategorija" name="Kategorija">
								<option value="Programiranja" name="Programiranje">Programiranje</option>
								<option value="Elektrotehnike" name="Elektrotehnika">Elektrotehnika</option>
								<option value="Baze Podataka" name="Baze Podataka">Baze Podataka</option>
								<option value="Matematika" name="Matematike">Matematika</option>
								<option value="Matematika 2" name="Matematike">Matematika 2</option>

							  </select>
						<br /></div>
				</div>
				<div class="form-group">
								<label for="Pitanje" class="col-sm-2 control-label">Pitanje:</label>
								<div class="col-sm-10">
									<textarea class="form-control" id="Pitanje" name="Pitanje" rows="4" placeholder="Upišite pitanje!" required></textarea>
								<br /></div>
								
						<!-- CAPTCHA -->	
						<div class="form-group">
								<img src="captcha.php"> &nbsp <input type="text" name="vercode" />
						</div>
								
					</div>
							
				<br />
				<input type="submit" name="submit" />
			</form>
		</div>
		
			
		<!-- PAGINATION -->	
		<div class="row">
		
			  <?php



					/* Get total number of records */
					$user = 'root';
					$db = 'tvzb';
					$host = 'localhost';
					$pass = '123';

					$conn = mysqli_connect("localhost","root","123","tvzb") or die("Error " . mysqli_error($conn)); 
					$sql = "SELECT ID, Ime, Pitanje, Kategorija, Datum FROM tva ORDER BY ID DESC";
					$result = mysqli_query($conn, $sql) or die ('Error updating database: '.mysql_error($result));;

					if(!$result){

						echo 'No data!';
					}
					while($person = mysqli_fetch_array($result, MYSQL_ASSOC))
					{
						echo '<div class="col-md-4">';
						echo "<h3>" . "Pitanje #" . $person['ID'] . " iz " . $person['Kategorija'] . "</h3>";
						echo "<h4>" . $person['Pitanje'] . "</h4>";
						echo "<p>" . "Pitanje postavio: " .  $person['Ime'] . "</p>";
						echo "<p>" . "Objavljeno: " . $person['Datum'] . "</p>";
						//Stvaranje URL-a
						$id = $person['ID'];
						$url = 'odgovori.php?id=' . $id;
						//Stvaranje brojaca odgovora
						$sql = "SELECT * FROM tvo WHERE Br = '$id'";
						$r = mysqli_query($conn, $sql);
						$row = mysqli_num_rows($r);
						//Odgovor na postavljeno pitanje sa brojacem
						echo '<a href="' . $url . '" class="btn btn-danger" value="submit" >Komentari <span class="badge">' . $row . '</span></a>';
						echo '</div>';
					}
						if( $page > 0 )
						{
						   $last = $page - 2;
						   echo '<div class="col-lg-12">';
						echo '<nav>';
						  echo '<ul class="pager">';
							echo "<li><a href=\"$_PHP_SELF?page=$last\">Prijašnja</a></li>";
							echo "<li><a href=\"$_PHP_SELF?page=$last\"> $page </a></li>";
							echo "<li><a href=\"$_PHP_SELF?page=$page\">Sljedeća</a></li>";
						  echo '</ul>
						</nav> ';
						echo '</div>';
						}
						else if( $page == 1 )
						{
						
						echo '<div class="col-lg-12">';
						echo '<nav>';
						  echo '<ul class="pager">';
							echo "<li><a href=\"$_PHP_SELF?page=$page\">Sljedeća</a></li>";
						  echo '</ul>
						</nav> ';
						echo '</div>';
						}
						else if( $left_rec < $rec_limit )
						{
						   $last = $page - 2;
						   echo '<div class="col-lg-12">';
						echo '<nav>';
						  echo '<ul class="pager">';
							 echo "<li><a href=\"$_PHP_SELF?page=$last\">Prijašnja</a></li>";
						  echo '</ul>
						</nav> ';
						echo '</div>';
						  
						}
						mysqli_close($conn);
						?>
		</div>
	</div>


	<!-- LOGIN -->
	<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	  <div class="modal-dialog">
				<div class="loginmodal-container">
					<h1>Prijavite se!</h1><br>
				  <form action="login.php" method="POST">
					<input type="text" name="user" placeholder="Korisničko ime">
					<input type="password" name="pass" placeholder="Lozinka">
					<input type="submit" name="login" class="login loginmodal-submit" value="Prijava">
				  </form>
					
				  <div class="login-help">
					<a href="register.php">Registracija</a> - <a href="forgotyourpass.php">Zaboravili lozinku?</a>
				  </div>
				</div>
			</div>
		  </div>
	
	
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