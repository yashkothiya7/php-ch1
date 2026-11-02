#6. Write a PHP program to find sum of n numbers. Take input from user.#

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
		$sum = 0;
		for($i = 1; $i <= $n; $i++){
			$sum = $sum + $i;
		}
		echo "sum of $n number is: $sum";
	}
?>