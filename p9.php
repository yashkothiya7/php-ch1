#9. Write a PHP program to print all even numbers till the entered number.#

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
		for($i = 2; $i <= $n; $i = $i + 2){
			echo "$i <br>";
		}
	}
?>