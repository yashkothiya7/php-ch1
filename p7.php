#7. Accept a two numbers from user. Write a PHP program to Add, Subtract and Multiply the numbers and displays result.#

<html>
	<body>
		<form method="POST">
			Enter Number1:
			<input type="number" name="num1"><br>
			Enter Number2:
			<input type="number" name="num2"><br>
			<input type="submit" name="demo" value="submit">
		</form>
	</body>
</html>

<?php
	if(isset($_POST['demo'])){
		$a = $_POST['num1'];
		$b = $_POST['num2'];
		$add = $a + $b;
		$sub = $a - $b;
		$mul = $a * $b;
		$div = $a / $b;
		echo "Addition: $add <br>";
		echo "Subtraction: $sub <br>";
		echo "Multiplication: $mul <br>";
		echo "Division: $div <br>";
	}
?>