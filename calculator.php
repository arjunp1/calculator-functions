<?php

function calculate($x, $y, $op)
{
	switch ($op) {
		case '+':
			$prod = $x + $y;
			break;
		case '-':
			$prod = $x - $y;
			break;
		case '*':
			$prod = $x * $y;
			break;
		case '/':
			if ($y == 0) {
				$prod = "&#8734";
			} else {
				$prod = $x / $y;
			}
	}

	return $prod;
}
$x = 0;
$y = 0;
$prod = 0;
$op = '';

extract($_GET);

?>

<html>

<head>
	<title>PHP Calculator</title>
</head>

<body>

	<form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">

		x = <input type="text" name="x" size="5" value="<?php print $x; ?>" />
		op =
		<select name="op">
			<option value="+" <?php if ($op == '+') echo 'selected="selected"'; ?>>+</option>
			<option value="-" <?php if ($op == '-') echo 'selected="selected"'; ?>>-</option>
			<option value="*" <?php if ($op == '*') echo 'selected="selected"'; ?>>*</option>
			<option value="/" <?php if ($op == '/') echo 'selected="selected"'; ?>>/</option>
		</select>
		y = <input type="text" name="y" size="5" value="<?php print $y; ?>" />


		<input type="submit" name="calc" value="Calculate" />
	</form>

	<?php
	if (isset($calc)) {
		if (is_numeric($x) && is_numeric($y)) {

			// call the caculate function
			$prod = calculate($x, $y, $op);

			// print the result 
			echo "<p>$x $op $y = $prod</p>";
		} else {

			echo "<p>x and y values are required to be numeric ... please re-enter values</p>";
		}
	}

	?>
</body>

</html>