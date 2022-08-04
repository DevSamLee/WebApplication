<?php
    $conn = mysquli_connect('localhost','serveruser', 'gorgonzola7!');
    mysqli_select_db($conn, 'serverside');    
    $name = mysqli_real_escape_string($conn, $_GET['name']); // ' cannot be special char
    $password = mysqli_real_escape_string($conn, $_GET['password']); // ' cannot be special char
    $spl = "SELECT * FROM user WHERE name='".$name."' AND password='".$password."'";
    echo $sql;
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
		if($result->num_rows == "0") {
			echo "Who are you?";
		} else {
			echo "Welcome.";
		}
	?>
</body>
</html>
