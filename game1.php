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

<html>

<head>
  <title>
    THE JumbledWOrd
  </title>
  <style>/* Set the background color and font family for the page */
body {
  background-image: url(game1.jpg);
  font-family: 'Times New Roman', Times, serif;
  color: black;
  background-size: cover;
}

/* Style the header */
h1 {
  font-size: 3em;
  text-align: center;
  margin-top: 50px;
}

/* Style the container div */
.container {
  max-width: 800px;
  margin: 0 auto;
  text-align: center;
}

/* Style the table */
table {
  margin: 0 auto;
}

/* Style the word display */
#word {
  font-size: 2em;
  margin-bottom: 20px;
}

/* Style the guess input and check/skip buttons */
#guess {
  font-size: 1.5em;
  padding: 10px;
  margin-right: 10px;
  border-radius: 5px;
  border: none;
  outline: none;
  background-color: #2e2f33;
  color: #fff;
}

#check,
#reset {
  font-size: 1.5em;
  padding: 10px;
  border-radius: 5px;
  border: none;
  outline: none;
  background-color:#4CAF50 ;
  color: #fff;
  cursor: pointer;
}

#check:hover,
#reset:hover {
  background-color:green;
}

/* Style the result and score displays */
#result {
  font-size: 1.5em;
  margin-top: 20px;
}

#score {
  font-size: 1.5em;
  margin-top: 20px;
  margin-bottom: 50px;
}

/* Style the back button */
button {
  font-size: 1.5em;
  padding: 10px;
  border-radius: 5px;
  border: none;
  outline: none;
  background-color: #7289da;
  color: #fff;
  cursor: pointer;
  margin-top: 20px;
  margin-left: 20px;
}

button:hover {
  background-color: red;
}
</style>
</head>

<body>
  <button onclick="location.href='gamepage.php'">Back</button>
  <div class="container">
    <table>
      <h1>Jumbled Word Game</h1>
      <h3>Can you Guess the Fruit Name?</h3><?php echo $user_data['uName']; ?>
      <p id="word"></p>
      <input type="text" id="guess" placeholder="Enter your guess here">
      <button id="check">Check</button><button id="reset">Skip</button>
      <p id="result"></p>
      <p id="score">Score: 0</p>
    </table>
  </div>

  <script>
    const word = document.getElementById("word");
    const guess = document.getElementById("guess");
    const check = document.getElementById("check");
    const reset = document.getElementById("reset");
    const result = document.getElementById("result");
    const score = document.getElementById("score");

    let wordList = ["apple", "mango", "orange", "date", "watermelon", "pineapple", "kiwi", "banana", "peach", "cherry", "guava", "blueberry"];
    let currentWord = wordList[Math.floor(Math.random() * wordList.length)];
    let jumbledWord = shuffleWord(currentWord);
    let currentScore = 0;

    word.textContent = jumbledWord;
    score.textContent = `Score: ${currentScore}`;

    check.addEventListener("click", function() {
      if (guess.value.toLowerCase() === currentWord) {
        result.textContent = "Correct!";
        currentScore++;
        score.textContent = `Score: ${currentScore}`;
        getNextWord();
      } else {
        result.textContent = "Incorrect, try again.";
      }
    });

    reset.addEventListener("click", function() {
      getNextWord();
    });

    function getNextWord() {
      guess.value = "";
      result.textContent = "";
      currentWord = wordList[Math.floor(Math.random() * wordList.length)];
      jumbledWord = shuffleWord(currentWord);
      word.textContent = jumbledWord;
      updateScore();
    }

    function updateScore() {
      const xhr = new XMLHttpRequest();
      xhr.open("POST", "");
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xhr.send(`score=${currentScore}`);
    }

    function shuffleWord(word) {
      let shuffledWord = "";
      word = word.split("");
      while (word.length > 0) {
        shuffledWord += word.splice(word.length * Math.random() << 0, 1);
      }
      return shuffledWord;
    }
  </script>

</body>

</html>
