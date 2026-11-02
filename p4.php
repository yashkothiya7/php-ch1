#4. Accept a string from user. Write PHP program to check whether that entered string is palindrome or not.#

<html>
	<body>
		<form method="POST">
			Enter String:
			<input type="text" name="str">
			<input type="submit" name="demo" value="submit">
		</form>
	</body>
</html>

<?php
	if(isset($_POST['demo'])){
		$str = $_POST['str'];
		//imp
		$rev = strrev($str);
		if($str == $rev)
			echo "$str is palindrome";
		else
			echo "$str is not palindrome";
	}
?>