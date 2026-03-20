<?php

$score = 0;

if($_POST['q1']=="a"){
$score++;
}

if($_POST['q2']=="a"){
$score++;
}

if($_POST['q3']=="b"){
$score++;
}

echo "<h2>Your Score: $score / 3</h2>";

if($score==3){
echo "Excellent!";
}
elseif($score==2){
echo "Good Job!";
}
else{
echo "Try Again!";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Result | QuizMaster</title>
  <link rel="stylesheet" href="index.css">
</head>

<body>

<header>
  <h1>Quiz Result</h1>
</header>

<main style="text-align:center; padding:40px;">

  <h2>Your Score: <?php echo $score; ?> / 3</h2>

  <?php
  if ($score == 3) {
      echo "<p>Excellent! </p>";
  } elseif ($score == 2) {
      echo "<p>Good Job </p>";
  } else {
      echo "<p>Try Again </p>";
  }
  ?>

  <br><br>

  <a href="index.php">Back To Home</a>

</main>

</body>
</html>
