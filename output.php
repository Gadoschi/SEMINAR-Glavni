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
				<a class="navbar-brand" href="index.html">TVZ Board</a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="#">Početna</a></li>
					<li><a href="#">Postavi pitanje!</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Kategorije<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li class="dropdown-header">I godina</li>
							<li><a href="#">Programiranje</a></li>
							<li><a href="#">uvod u WEB tehnologije</a></li>
							<li><a href="#">OOP</a></li>
							<li class="divider"></li>
							<li class="dropdown-header">II godina</li>
							<li><a href="#">Baze podataka</a></li>
							<li><a href="#">Arhitektura računala</a></li>
							<li class="dropdown-header">III godina</li>
							<li><a href="#">Dunno</a></li>
							<li><a href="#">Dunno</a></li>
						</ul>
					</li>
					<li><a href="#contact" data-toggle="modal">Kontakt</a></li>
				</ul>
			</div> <!--/.nav-collapse -->
		</div>
	</div>
	
	<div class="container">
		<div class="jumbotron text-center">
			<h1>Vaša poruka je poslana!</h1>
			<p>
			<?php

			$kontakt_ime = $_POST['kontakt_ime'];
			$kontakt_email = $_POST['kontakt_email'];
			$kontakt_prijedlog = $_POST['kontakt_prijedlog'];
			$to = "gadoschi@gmail.com";
			$subject = "Nova poruka";
			mail ("gadoschi@gmail.com", $subject, $kontakt_prijedlog, "Od: " . $kontakt_ime . $kontakt_email);
			echo "Hvala Vam na vašem prijedlogu! Nadamo se da ćemo ga što prije usvojiti!";
									?></p>
									
			<a href="index.html" class="btn btn-primary">Na početnu!</a>
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

					<div class="modal-header">
						<h4 class="text-center">Kontakt</h4>
					</div>
					<div class="modal-body">
							<div class="form-group">
						
								
							</div>
					</div>
							<div class="modal-footer">
								<button type="submit" name="submit" id="submit" name="submit" class="btn btn-primary">Pošalji!</button></input>
								<a class="btn btn-default" data-dismiss="modal">Zatvori</a>
							</div>
						
			</div>
		</div>
	</div>
	

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>