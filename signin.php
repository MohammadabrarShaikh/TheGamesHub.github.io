<!DOCTYPE html>
<html>

<head>
	<title>SIGN IN</title>
	<style>
		/* set background color and font style */
		body {
			background-image: url(backgroundimagesignin.jpeg);
			background-size: 100% 100%;
			background-repeat: no-repeat;
			background-size: cover;
		}


		/* style the login box */
		#box {
  margin: auto;
  margin-top: 50px;
  max-width: 400px;
  padding: 20px;
  background-color: transparent;
  border-radius: 10px;
  box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.5);
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serifc;
}

		/* style the login form */
		form {
			display: flex;
			flex-direction: column;
		}

		/* style the input fields */
		input[type="text"],
		input[type="password"] {
			padding: 10px;
			margin: 10px 0;
			border-radius: 5px;
			border: none;
			background-color: #ccc;
		}

		/* style the login button */
		#button {
			padding: 10px;
			background-color: #ff9900;
			border: none;
			color: #fff;
			font-weight: bold;
			border-radius: 5px;
			cursor: pointer;
			margin-top: 10px;
			
		}

		/* style the signup button */
		.buttona button {
			padding: 10px;
			background-color: #ff9900;
			border: none;
			color: #fff;
			font-weight: bold;
			border-radius: 5px;
			cursor: pointer;
			margin-top: 10px;
		}

		/* change color of links */
		a {
			color: #fff;
		}

		/* change color of links on hover */
		a:hover {
			color: #ff9900;
		}

		.button {
			display: inline-block;
			margin-right: 10px;
		}

		.buttona {
			display: inline-block;
		}
		
	</style>
</head>

<body>

	<div id="box">

		<form method="post">
			<div class="title" style="font-size: 20px;margin: 10px;color: white;">SIGN IN</div>
			<br>
			Enter Username:<input id="text" type="text" name="user_name" placeholder="UserName">
			Enter Password:
			<input id="text" type="password" name="password" placeholder="Password">
			<a href="forgetpassword.php">Forget Password</a>
			<div class="button">
				<input id="button" type="submit" value="Login">
			</div>
			<div class="buttona">
				<button onclick="location.href='signup.php'" type="button">Click to Signup</button>
				<button onclick="location.href='adminlogin.php'" type="button">Login as Admin</button>
			</div>


		</form>
	</div>


	<?php

	session_start();

	include("connection.php");
	include("functions.php");


	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];


		if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {

			//read from database
			$query = "select * from user_details where uName = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if ($result) {
				if ($result && mysqli_num_rows($result) > 0) {

					$user_data = mysqli_fetch_assoc($result);

					if ($user_data['password'] === $password) {

						$_SESSION['user_id'] = $user_data['id'];
						header("Location: index.php");
						die;
					}
				}
			}
			echo "wrong username or password!";
		} else {
			echo "wrong username or password!";
		}
	}

	?>
</body>

</html>