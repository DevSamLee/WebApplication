<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<script>
		password = prompt("password");
		if(password == 1111) {
			document.write("Welcome.");
		} else {
			document.write("Who are you?");
		}
	</script>
	<? php
		$password = 1111;
		if($password == 1111) {
			echo "Welcome.";
		} else {
			echo "Who are you?";
		}
	?>
</body>
</html>
