#2.Write a PHP program to find maximum number from the two numbers entered by user.#

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
		$num1 = $_POST['num1'];
		$num2 = $_POST['num2'];

		if($num1 > $num2)
			echo "num1 is maximum";
		else
			echo "num2 is maximum";
	}
?>