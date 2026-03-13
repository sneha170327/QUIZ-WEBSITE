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
<h2><a href="index.php"> Back To Home</a></h2>