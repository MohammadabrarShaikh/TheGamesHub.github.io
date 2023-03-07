<html><head>
    <style>
        /* Body styles */
body {
  background-image: url(forgetpasswordbackgroundimage.jpeg);
  font-family: Arial, sans-serif;
  color: #ffffff;
  background-size:cover;
  
}

/* Box styles */
#box {
  margin: auto;
  margin-top: 50px;
  max-width: 400px;
  padding: 20px;
  background-color: transparent;
  border-radius: 10px;
  box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.5);
}

/* Title styles */
.title {
  text-align: center;
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 20px;
  color: #ffffff;
  text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
}

/* Input styles */
input[type=email],
input[type=password] {
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
  border: none;
  border-radius: 5px;
  background-color: #f2f2f2;
  font-size: 16px;
}

/* Button styles */
input[type=submit] {
  width: 100%;
  padding: 10px;
  border: none;
  border-radius: 5px;
  background-color: #0077c2;
  color: #ffffff;
  font-size: 16px;
  font-weight: bold;
  cursor: pointer;
  transition: background-color 0.3s ease-in-out;
}

input[type=submit]:hover {
  background-color: #005ea2;
}

/* Error message styles */
p {
  text-align: center;
  font-size: 16px;
  font-weight: bold;
  margin-top: 20px;
}

    </style>
</head>
    <body>
    <div id="box">

<form method="post">
    <div class="title">FORGET PASSWORD</div>
    Enter Email:
    <input id="text" type="email" name="email" placeholder="Email"><br>
    Enter New Password:
    <input id="text" type="password" name="password" placeholder="New Password"><br><br>

    <input id="button" type="submit" value="Reset Password"><br>
</form>
</div>


<?php
session_start();

include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
//something was posted
$email = $_POST['email'];
$password = $_POST['password'];

// Check if email exists in database
$check_email_query = "SELECT * FROM user_details WHERE email = '$email'";
$check_email_result = mysqli_query($con, $check_email_query);

if (mysqli_num_rows($check_email_result) > 0) {
    // Email exists, update password
    $update_query = "UPDATE user_details SET password='$password' WHERE email='$email'";
    $update_result = mysqli_query($con, $update_query);

    if ($update_result) {
        // Password updated successfully, redirect to login page
        header("Location: signin.php");
    } else {
        // Show error message to the user
        $error_message = "Error: " . mysqli_error($con);
        echo"This This email is not associated with any account";
    }
} else {
    // Show error message to the user
   
    echo"This email is not associated with any account";
}
}

// Display error message, if any
if (isset($error_message)) {
echo "<p style='color:red'>" . $error_message . "</p>";
}

?>
</body>
</html>
