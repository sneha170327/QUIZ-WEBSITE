<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Quiz</title>
    <meta name="description" content="Take a simple quiz on HTML, CSS, and PHP. Test your basic web development knowledge.">

<link rel="stylesheet" href="index.css">
</head>

<body>
<header>
<h2 style="text-align:center;">Simple Quiz</h2>
</header>
<form action="result.php" method="POST">

<p>1. HTML stands for?</p>

<input type="radio" name="q1" value="a"> Hyper Text Markup Language<br>
<input type="radio" name="q1" value="b"> High Text Machine Language<br>
<input type="radio" name="q1" value="c"> Hyper Tool Markup Language<br>

<br>

<p>2. CSS is used for?</p>

<input type="radio" name="q2" value="a"> Styling website<br>
<input type="radio" name="q2" value="b"> Database<br>
<input type="radio" name="q2" value="c"> Server<br>

<br>

<p>3. PHP is?</p>

<input type="radio" name="q3" value="a"> Frontend language<br>
<input type="radio" name="q3" value="b"> Backend language<br>
<input type="radio" name="q3" value="c"> Browser<br>

<br>

<button type="submit">Submit Quiz</button>

</form>

</body>
</html>
