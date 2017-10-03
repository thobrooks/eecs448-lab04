<html>
	<head>
	</head>
	<body>
		<form action="back.php" method="post">
			Username: <input type="text" name="user"></br>
			Password: <input type="text" name="pass"></br>
			($1) Item 1 Quantity: <input type="text" name="i1"></br>
			($2) Item 2 Quantity: <input type="text" name="i2"></br>
			($3) Item 3 Quantity: <input type="text" name="i3"></br>
			Shipping:</br>
			Free 7-Day <input type="radio" name="ship"></br>
			Three Day ($5) <input type="radio" name="ship"></br>
			Overnight ($50) <input type="radio" name="ship"></br>
			<input type="button" value="Reset" id="Reset"></br>
			<input type="submit" value="Purchase"></br>
		</form>
	</body>
</html>
