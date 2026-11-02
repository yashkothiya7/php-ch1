#10. Create a function that accepts 3 numbers as parameters and check whether the sum of 3 numbers is prime or not. Note: Input should be collected from user using an HTML page.#

<html>
	<body>
		<form method="POST">
			Enter Number1:
			<input type="number" name="num1"><br>
			Enter Number2:
			<input type="number" name="num2"><br>
			Enter Number3:
			<input type="number" name="num3"><br>
			<input type="submit" name="demo" value="submit">
		</form>
	</body>
</html>

<?php
	//imp
	function isPrime($sum){
		if($sum < 2)
			return false;
		for($i = 2; $i < $sum; $i++){
			if($sum % $i == 0)
				return false;
		}return true;
	}
	if(isset($_POST['demo'])){
		$a = $_POST['num1'];
		$b = $_POST['num2'];
		$c = $_POST['num3'];
		
		$sum = $a + $b + $c;
		
		if(isPrime($sum))
			echo "$sum is prime number";
		else
			echo "$sum is not prime number";
	}
?>