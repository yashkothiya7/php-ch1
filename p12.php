#12. Write a PHP program that changes color of the web page using switch case.#

<html>
	<body bgcolor="<?php
		$color = 'white';
		if(isset($_POST['demo'])){
			switch($_POST['c']){
				case 'red':
					$color = 'red';
					break;
				case 'yellow':
					$color = 'yellow';
					break;
				case 'blue':
					$color = 'blue';
					break;
				case 'green':
					$color = 'green';
					break;
				default:
					$color = 'white';
			}
		}
		echo $color;
	?>">
		<form method="POST">
			<select name="c">
				<option value="red">Red</option>
				<option value="yellow">Yellow</option>
				<option value="blue">Blue</option>
				<option value="green">Green</option>
			</select>
			<input type="submit" name="demo" value="submit">
		</form>
	</body>
</html>