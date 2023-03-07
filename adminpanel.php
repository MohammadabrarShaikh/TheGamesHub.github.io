<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel - Users</title>
	<style>
		body {
			font-family: Arial, sans-serif;
		}

		h1 {
			text-align: center;
		}

		table {
			width: 100%;
			border-collapse: collapse;
			margin-top: 20px;
		}

		th, td {
			padding: 10px;
			text-align: center;
			border-bottom: 1px solid #ddd;
		}

		th {
			background-color: #f2f2f2;
		}

		a {
			color: #4CAF50;
			text-decoration: none;
		}

		a:hover {
			text-decoration: underline;
		}

		#username {
			float: right;
			margin-top: 10px;
			margin-right: 20px;
			font-weight: bold;
		}
	</style>
</head>
<body>
	
	
	<h1>Admin Panel - Users</h1>
	
	<a href="adminlogin.php">Back to login page</a>
	
	<table>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>UserName</th>
			<th>Password</th>
		</tr>
		<?php
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
			
			$sql = "SELECT * FROM user_details";
			$result = mysqli_query($conn, $sql);
			
			// Loop through all users and display their details and scores
			while($row = mysqli_fetch_assoc($result)) {
				echo "<tr>";
				echo "<td>" . $row["id"] . "</td>";
				echo "<td>" . $row["name"] . "</td>";
				echo "<td>" . $row["email"] . "</td>";
				echo "<td>" . $row["uName"] . "</td>";
				echo "<td>" . $row["password"] . "</td>";
				echo "</tr>";
			}
			
			// Close the database connection
			mysqli_close($conn);
		?>
	</table>
</body>
</html>
