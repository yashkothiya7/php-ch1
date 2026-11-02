#8. Accept a number from user as “Radius” of a circle. Write PHP program find Area of a Circle. (Area = PI * radius * radius).#

<html>
	<body>
		<form method="POST">
			Enter Radius:
			<input type="number" name="num">
			<input type="submit" name="demo" value="submit">
		</form>
	</body>
</html>

<?php
	if(isset($_POST['demo'])){
		$r = $_POST['num'];
		$area = 3.14 * $r * $r;
		echo "Area of circle is: $area";
	}
?>