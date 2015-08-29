<?php

	include 'includes/connection.php';
	 session_start(); 

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
	</head>

	
<?php
							
							include 'includes/connection.php';
						
							
							if(isset($_POST['submit'])) {
								
								
								$nick = $_POST['Nick'];
								$odgovor = $_POST['Odgovor'];
								
								$sql = "INSERT INTO `tvzb`.`tvo` (`ID`, `Br`, `Nick`, `Odgovor`, `Datum`) VALUES(NULL, '{$_SESSION['ajdi']}','$nick', '$odgovor', NOW() )";
								$result = mysqli_query($conn, $sql);
								if(!$result){
									echo 'ne radi!';
								}else{
									echo '<div class="alert alert-success" role="alert">Uspješno ste postavili odgovor!</div>';
									header( "refresh:2; url=odgovori.php?id={$_SESSION['ajdi']}" );
								}
							
								
							}
							?>
					 
					 </body>
					 </html>