<!DOCTYPE html>
<html>

<head>
    <title>GK Game</title>
    <style>
      /* Set the background color and font family for the page */
body {
  background-image: url(game3.jpeg);
  background-size: cover;
  font-family: Arial, sans-serif;
  color: #fff;
  margin: 0;
  padding: 0;
}

/* Style the header */
h1 {
  font-size: 3em;
  text-align: center;
  margin-top: 50px;
}
h2{
  text-align: center;
  margin-top: 50px;
}
p{
  text-align: center;
  margin-top: 50px;
}

/* Style the container div */
.container {
  max-width: 800px;
  margin: 0 auto;
  text-align: center;
  padding: 30px;
  box-sizing: border-box;
  border: 2px solid #fff;
}
.question-container{
  text-align: center;
}

/* Style the table */
table {
  margin: 0 auto;
}

/* Style the word display */
#word {
  font-size: 3em;
  margin-bottom: 30px;
  text-shadow: 2px 2px #000;
}

/* Style the guess input and check/skip buttons */
#guess {
  font-size: 2em;
  padding: 10px;
  margin-right: 10px;
  border-radius: 5px;
  border: none;
  outline: none;
  background-color: #2e2f33;
  color: #fff;
  width: 60%;
  
}

#check,
#reset {
  font-size: 2em;
  padding: 10px;
  border-radius: 5px;
  border: none;
  outline: none;
  background-color:#4CAF50 ;
  color: #fff;
  cursor: pointer;
  width: 30%;
}

#check:hover,
#reset:hover {
  background-color:green;
}

/* Style the result and score displays */
#result {
  font-size: 2em;
  margin-top: 30px;
}

#score {
  font-size: 2em;
  margin-top: 30px;
  margin-bottom: 50px;
}

/* Style the back button */
button {
  font-size: 2em;
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
    <h1>General Knowledge Game</h1>
    <div id="question-container">
        <h2 id="question"></h2>
        <ul id="choices">
            <li><button class="choice-btn"></button></li>
            <li><button class="choice-btn"></button></li>
            <li><button class="choice-btn"></button></li>
            <li><button class="choice-btn"></button></li>
        </ul>
    </div>
    <div id="score-container">
        <p>Score: <span id="score">0</span></p>
    </div>
    <div id="buttons-container">
        <button id="skip-btn">Skip</button>
        <button id="back-btn">Back</button>
    </div>
    <script>
        // Define the questions and answers
const questions = [
  {
    question: "What is the device that controls the speed of a car?",
    choices: ["Accelerator", "Throttle", "Clutchl", "Brake"],
    answer: 0
  },
  {
    question: "What is the name of the circular object that is used to turn a car?",
    choices: ["Gearshift", "Steering Wheel", "Handbrake", "Accelerator Pedal"],
    answer: 1
  },
  {
    question: "What is the component that generates power in a car?",
    choices: ["Gearshift", "Steering Wheel", "Engine", "Accelerator Pedal"],
    answer: 2
  },
  {
    question: "What is the device that helps a car to start?",
    choices: ["Gearshift", "Steering Wheel", "Engine", "Starter Motor"],
    answer: 3
  }
];

// Get references to the HTML elements
const questionEl = document.getElementById("question");
const choicesEl = document.getElementById("choices");
const scoreEl = document.getElementById("score");
const skipBtn = document.getElementById("skip-btn");
const backBtn = document.getElementById("back-btn");

// Initialize the game state
let currentQuestion = 0;
let score = 0;

// Function to display the current question and choices
function showQuestion() {
  // Get the current question object
  const question = questions[currentQuestion];

  // Set the question text
  questionEl.innerText = question.question;

  // Clear the previous choices
  choicesEl.innerHTML = "";

  // Loop through the answer choices and create a button for each one
  for (let i = 0; i < question.choices.length; i++) {
    const choice = question.choices[i];
    const button = document.createElement("button");
    button.innerText = choice;
    button.classList.add("choice-btn");
    button.addEventListener("click", () => {
      // Check if the user selected the correct answer
      if (i === question.answer) {
        // Increment the score and display it
        score++;
        scoreEl.innerText = score;
      }

      // Move to the next question
      currentQuestion++;
      if (currentQuestion < questions.length) {
        showQuestion();
      } else {
        // End the game if there are no more questions
        endGame();
      }
    });
    choicesEl.appendChild(button);
  }
}

// Function to end the game and display the score
function endGame() {
  questionEl.innerText = "Game Over";
  choicesEl.innerHTML = "";
  scoreEl.innerText = score;
  skipBtn.disabled = true;
}

// Event listeners for the skip and back buttons
skipBtn.addEventListener("click", () => {
  // Move to the next question
  currentQuestion++;
  if (currentQuestion < questions.length) {
    showQuestion();
  } else {
    // End the game if there are no more questions
    endGame();
  }
});

backBtn.addEventListener("click", () => {
  // Go back to the index page
  window.location.href = "gamepage.php";
});

// Start the game by showing the first question
showQuestion();

    </script>
</body>

</html>