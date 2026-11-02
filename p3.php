#3.Write a PHP program that prints Fibonacci series till the number entered by user.#

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
		$a = 1;
		$b = 2;

		echo "Fibonacci series upto $n is: <br>";
		//imp
		while($a <= $n){
			echo $a . " ";
			$c = $a+$b;
			$a = $b;
			$b = $c;
		}
	}
?>