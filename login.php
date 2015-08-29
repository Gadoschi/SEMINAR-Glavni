<html>
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
</head>

<body>
<?php

	include 'includes/connection.php';
	session_start();

	if(isset($_POST['login'])){
		$user = $_POST['user'];
		$pass = $_POST['pass'];

		$user = mysqli_real_escape_string($conn, $user);

		$_SESSION['user'] = $user;

		function is_empty($user, $pass){
			if(empty($user) || empty($pass)){
				echo 'Sva polja moraju biti popunjena!';
				header("Refresh:2;url=index.php;");
				echo 'ne valja ime';
				return false;
			} else{
				return true;
			}
		}

		function is_valid($user, $pass){
			global $conn;
			$query = "SELECT username, password FROM tvu WHERE username = '$user' AND password = '$pass'";
			$result = mysqli_query($conn, $query);
			if(mysqli_num_rows($query) > 0){
				echo 'ne valja nesto';
				return false;
			}else{
				return true;
			}
		}


		if(is_empty($user,$pass) && is_valid($user, $pass)){
			$query = "SELECT username, password FROM tvu WHERE username = '$user' AND password = '$pass'";
			$result = mysqli_query($conn, $query);
			if(mysqli_num_rows($result) > 0){
				echo '<div class="alert alert-success" role="alert">Uspješno ste se prijavili!</div>';
				header("Refresh: 2; url=index.php");
			}else{

			echo 'tu ne radi';
			}
		}
	}

?>

</body>
</html>