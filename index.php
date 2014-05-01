<?php session_start() ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>A simple mind reader</title>
		<link rel="stylesheet" href="style.css" />
	</head>

	<body>
		<div id="header">
			<h1>A simple mind reader</h1>
			<h2>How does it work ?</h2>
			<ol>
				<li>Choose a number.</li>
				<li>Substrack the sum of the number's digits.</li>
				<li>Memorize the sign corresponding to the new number.</li>
				<li>Click the button below.</li>
			</ol>
		</div>

		<div id="main">
			<?php
				$signs_array = array('€', '$', '*', '=', '#', '@', 'Ÿ', '%', '£', '=', 'È', 'π', 'Ï', 'ƒ');
				$sign = rand(0, 13);
				$i = 0;
				$exc = array(0, 9, 18, 27, 36, 45, 54, 63, 72, 81, 90);
			?>
			<p class="numbers">
				<?php
					while ($i <= 99) {
						if (!in_array($i, $exc)) {
							echo $i . '<span style="color: red;">' . $signs_array[rand(0, 13)] . '</span> | ';
							
						}
						else {
							echo $i . '<span style="color: red;">' . $signs_array[$sign] . '</span> | ';
						}
						$i++;
					}
					$_SESSION['sign'] = $signs_array[$sign];
				?>
			</p>
			
			<a href="choose.php" class="truth_button">Moment of truth...</a>
		</div>
	</body>
</html>
