<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
    <style>body {
	font-family: Arial, sans-serif;
	background-image: url(forgetpasswordbackgroundimage.jpeg);
	background-size: cover;
}

h1 {
	text-align: center;
	font-family: 'Times New Roman', Times, serif;
}

form {
	
  margin: auto;
  margin-top: 50px;
  max-width: 400px;
  padding: 20px;
  background-color: transparent;
  border-radius: 10px;
  box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.5);

}

label {
	display: block;
	margin-bottom: 10px;
	color:whitesmoke;
	font-family: 'Times New Roman', Times, serif;
	
}

input[type="text"],
input[type="password"] {
	display: block;
	width: 95%;
	padding: 10px;
	margin-bottom: 20px;
	border: none;
	border-radius: 3px;
	box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
}

input[type="submit"] {
	display: block;
	width: 100%;
	padding: 10px;
	background-color: #4CAF;
	color: #fff;
	border: none;
	border-radius: 3px;
	cursor: pointer;
	font-family: 'Times New Roman', Times, serif;
}

input[type="submit"]:hover {
	background-color: #3e8e41;
}
button{
	display: block;
	width: 100%;
	padding: 10px;
	background-color: #4CAF;
	color: #fff;
	border: none;
	border-radius: 3px;
	cursor: pointer;
	font-family: 'Times New Roman', Times, serif;

}
button:hover{
	background-color: #3e8e41;
}
</style>
</head>
<body>
	<h1>Admin Login</h1>
	<?php
		session_start();
		if(isset($_SESSION['admin_id'])) {
			header("Location: admin_panel.php");
		}
		if(isset($_POST['login'])) {
			// Connect to the database
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "details";
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			
			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			
			// Fetch admin details from the database
			$username = $_POST['username'];
			$password = $_POST['password'];
			$sql = "SELECT * FROM admin_details WHERE username='$username' AND password='$password'";
			$result = mysqli_query($conn, $sql);
			
			// Check if admin exists and log them in
			if(mysqli_num_rows($result) == 1) {
				$row = mysqli_fetch_assoc($result);
				$_SESSION['admin_id'] = $row['id'];
				header("Location: adminpanel.php");
			} else {
				echo "<p>Invalid username or password. Please try again.</p>";
			}
			
			// Close the database connection
			mysqli_close($conn);
		}
	?>
	<form method="post">
		<label>Username:</label>
		<input type="text" name="username" required placeholder="Enter Admin User Name">
		<label>Password:</label>
		<input type="password" name="password" required placeholder="Password">
		<input type="submit" name="login" value="Login"><br>
		<button onclick="location.href='signin.php'">Back</button>
	</form>
</body>
</html>
