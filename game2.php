<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $username = $_SESSION['user_id'];
  $score = $_POST['score'];
  mysqli_query($con, "UPDATE users SET score = score + $score WHERE username = '$username'");
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Math Game</title>
    <style>
        body {
  font-family: Arial, sans-serif;
  background-image: url(game2.jpeg);
  background-size: cover;
}

.container {
  max-width: 600px;
  margin: 0 auto;
  padding: 20px;
  background-color: grey;
  box-shadow: 0px 0px 10px #ccc;
  border-radius: 5px;
}

h1 {
  text-align: center;
}

#problem {
  font-size: 24px;
  text-align: center;
  margin: 20px 0;
}

#input-container {
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 20px 0;
}

#answer {
  font-size: 18px;
  padding: 10px;
  margin-right: 10px;
  border-radius: 5px;
  border: none;
  outline: none;
}

button {
  font-size: 18px;
  padding: 10px;
  border-radius: 5px;
  border: none;
  outline: none;
  cursor: pointer;
}

#check-btn {
  background-color: #4CAF50;
  color: #fff;
  margin-right: 10px;
}

#skip-btn {
  background-color: #f44336;
  color: #fff;
}

#score-container {
  text-align: center;
}

#score {
  font-size: 24px;
  font-weight: bold;
}

#back-btn {
  display: block;
  text-align: center;
  margin-top: 20px;
  text-decoration: none;
  font-weight: bold;
  color: #4CAF50;
}
h3 {
  text-align: center;
  margin-top: 50px;
}

    </style>
</head>

<body>
    <div class="container">
        <h1>Math Game</h1>
        <h3><?php echo $user_data['uName']; ?></h3>
        <div id="problem"></div>
        <div id="input-container">
            <input type="text" id="answer" placeholder="Enter your answer">
            <button id="check-btn">Check</button>
            <button id="skip-btn">Skip</button>
        </div>
        <div id="score-container">
            <p>Score: <span id="score">0</span></p>
        </div>
        <a href="gamepage.php" id="back-btn">Back</a>
    </div>
    <script>
        // Get the HTML elements
        var problemElement = document.getElementById("problem");
        var answerElement = document.getElementById("answer");
        var checkButton = document.getElementById("check-btn");
        var skipButton = document.getElementById("skip-btn");
        var scoreElement = document.getElementById("score");

        // Initialize the score
        var score = 0;

        // Generate a random math problem
        function generateProblem() {
            var num1 = Math.floor(Math.random() * 10) + 1;
            var num2 = Math.floor(Math.random() * 10) + 1;
            var operator = ["+", "-", "*", "/"][Math.floor(Math.random() * 4)];
            var problem = num1 + " " + operator + " " + num2;
            return problem;
        }

        // Display the math problem
        function displayProblem() {
            problem = generateProblem();
            problemElement.textContent = problem;
        }

        // Check the user's answer
        function checkAnswer() {
            var answer = parseInt(answerElement.value);
            if (isNaN(answer)) {
                alert("Please enter a number.");
                return;
            }
            if (eval(problem) == answer) {
                score++;
                scoreElement.textContent = score;
                
            } else {
                
            }
            displayProblem();
            answerElement.value = "";
        }

        // Skip the math problem
        function skipProblem() {
            displayProblem();
            answerElement.value = "";
        }

        // Add event listeners to the buttons
        checkButton.addEventListener("click", checkAnswer);
        skipButton.addEventListener("click", skipProblem);

        // Display the first math problem
        displayProblem();
    </script>
</body>

</html>