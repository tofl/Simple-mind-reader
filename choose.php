<?php session_start() ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Moment of truth</title>
		<link rel="stylesheet" href="style.css" />
	</head>

	<body>
		<h1 class="h1_choice">I think you chose...</h1>
		<p class="big">... <span class="very_big"><?php echo $_SESSION['sign']; ?></span></p>
		<p><a href="index.php" class="truth_button">Try again !</a></p>
	</body>
</html>
