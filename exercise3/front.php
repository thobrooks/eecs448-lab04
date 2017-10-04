<html>
	<head>
            <script src="formCheck.js"></script>
            <link rel="stylesheet" href="style.css">
	</head>
	<body>
		<form onsubmit="return check()" action="back.php" method="post">
			Username: <input type="text" name="user" id="user"></br>
			Password: <input type="text" name="pass" id="pass"></br>
			<p>Select Items to Buy:</p>
			($1) Item 1 Quantity: <input type="text" name="i1" id="i1"></br>
			($2) Item 2 Quantity: <input type="text" name="i2" id="i2" ></br>
			($3) Item 3 Quantity: <input type="text" name="i3" id="i3"></br>
			<p>Shipping:</p>
			Free 7-Day <input type="radio" name="ship" id="ship1" value="f"></br>
			Three Day ($5) <input type="radio" name="ship" id="ship2" value="t"></br>
			Overnight ($50) <input type="radio" name="ship" id="ship3" value="o"></br></br>
			<input type="button" onclick="reset()" value="Reset"></br></br>
			<input type="submit" value="Purchase"></br>
		</form>
	</body>
</html>
