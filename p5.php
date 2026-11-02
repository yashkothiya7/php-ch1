#5. Write a PHP program to accept a number from user and find its square and cube.#

<html>
	<body>
		<form method="POST">
			Enter Number:
			<input type="number" name="num">
			<input type="submit" name="demo" value="submit">
		</form>
	</body>
</html>

<?php
	if(isset($_POST['demo'])){
		$n = $_POST['num'];
		//imp
		$sqr = $n * $n;
		$cub = $n * $n * $n;
		echo "$n's square is: $sqr <br>";
		echo "$n's cube is: $cub <br>";
	}
?>