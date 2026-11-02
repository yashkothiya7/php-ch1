#1.Write a PHP program to check whether the number entered is Positive / Negative or Zero entered by user.#

<html>
	<body>
		<form method="POST">
			Enter Number:
			<input type="text" name="num">
			<input type="submit" name="demo" value="submit">
		</form>
	</body>
</html>

<?php
	if(isset($_POST['demo'])){
		$n = $_POST['num'];
		if($n > 0)
			echo "$n is Positive";
		else if($n < 0)
			echo "$n is Negative";
		else
			echo"Zero";
	}
?>