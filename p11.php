#11. Create a function that accepts a number as argument and displays sum of digit of a number. E.g. If Number is 123 then sum of Digits is 6 i.e., 1+2+3 = 6 
Note: Input should be collected from user using an HTML page.#

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
	//imp
	function SumOfDigits($num){
		$sum = 0;
		while($num > 0){
			$sum += $num % 10;
			$num = (int)($num / 10);
		}
		echo "sum of digits is: $sum";
	}
	if(isset($_POST['demo'])){
		$n = $_POST['num'];
		SumOfDigits($n);
	}
?>