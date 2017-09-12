<!DOCTYPE html>
<html>
<head>
	<title>PHP Quizzer!</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
  <header>
  	<div class="container">
  		<h1>PHP Quizzer</h1>
  	</div>
  </header>
  <main>
  	<div class="container">
  		<div class="current">Question 1 of 5</div>
      <p class="question">What does PHP stand for?</p>
      <form method="post" action="process.php">
        <ul class="choices">
          <li><input type="radio" name="choice" value="1">PHP: Hypertext Preprocessor</li>
          <li><input type="radio" name="choice" value="1">Private Home Page</li>
          <li><input type="radio" name="choice" value="1">Personal Home Page</li>
          <li><input type="radio" name="choice" value="1">Personal Hypertext Preprocessor</li>
        </ul>
        <input type="submit" value="Submit">
      </form>
  	</div>
  </main>
  <footer>
  	<div class="container">
  		<p>&copy; 2017 Lynchology.com</p>
  	</div>
  </footer>

</body>
</html>