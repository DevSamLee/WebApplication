<?php
    $conn = mysquli_connect('localhost','serveruser', 'gorgonzola7!');
    mysqli_select_db($conn, 'serverside');
    $spl = "SELECT * FROM user WHERE name='".$_GET['name']."' AND password='".$_GET['password']."'";
    $result = mysqli_query($conn, $sql);
    var_dump($result->num_rows);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<? php
		if($result->num_rows == "1") {
			echo "Welcome.";
		} else {
			echo "Who are you?";
		}
	?>
</body>
</html>
