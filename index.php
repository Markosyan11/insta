<?php
$dbc = mysqli_connect('localhost', 'root', '', 'html') OR DIE('Error connetion on DB');
if(isset($_POST['submit'])){
	$username = mysqli_real_escape_string($dbc, trim($_POST['username']));
	$password1 = mysqli_real_escape_string($dbc, trim($_POST['password1']));
	if(!empty($username) && !empty($password1)) {
		$query = "SELECT * FROM `signup` WHERE username = '$username'";
		$data = mysqli_query($dbc, $query);
		if(mysqli_num_rows($data) == 0) {
		$query ="INSERT INTO `signup` (username, password) VALUES ('$username', '$password1')";
			mysqli_query($dbc,$query);
			echo 'Done';
			mysqli_close($dbc);
			exit();
				
		}

	}
}
?>
	<!-------------------------------------------------------------------->
	<!-------------------------------------------------------------------->
<!DOCTYPE html>

<html lang="en" style="width: 1920px; height: 1800px; margin-right: 180px;"> 
	<!-------------------------------------------------------------------->
	<!-------------------------------------------------------------------->
<head>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="images/logo3.ico" type="image/x-icon">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Instagram WindUp</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
	<!-------------------------------------------------------------------->
	<!-------------------------------------------------------------------->
	
	<!-------------------------------------------------------------------->
	<!-------------------------------------------------------------------->
	<h1>
		<img src="images/logo.png" width="300" align="light" hspace="170">
	<h1>
	<!-------------------------------------------------------------------->
	<!-------------------------------------------------------------------->
	<h1 class="logo2">
		<img src="images/logo2.png" width="70" align="light" hspace="480">
	<h1>
	<!-------------------------------------------------------------------->
	<!-------------------------------------------------------------------->
	<h1 class="heraxos">
		<img src="images/phone.png" width="300" align='left' hspace="40">
	<h1>
	<!-------------------------------------------------------------------->
	<!-------------------------------------------------------------------->
  <form class="sign-up" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  	<!-------------------------------------------------------------------->
  	<!-------------------------------------------------------------------->
  	<content>
    <h1 class="sign-up-title">Instagram WindUp</h1>
    <label for="username">Username:</label>
    <input type="text" name="username" class="sign-up-input" autofocus>
    <label for="password">Password:</label>
    <input type="password" name="password1" class="sign-up-input" >
    <!-------------------------------------------------------------------->
    <!-------------------------------------------------------------------->
    <input type="submit" name="submit" class="sign-up-button">
    </content>
	<!-------------------------------------------------------------------->
	<!-------------------------------------------------------------------->
</form>
	<!-------------------------------------------------------------------->
	<!-------------------------------------------------------------------->
<footer class="clear">
	<p>All Right Reserved 2020-2022</p>
</footer>
	<!-------------------------------------------------------------------->
	<!-------------------------------------------------------------------->
<body>
</html>
