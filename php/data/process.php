<?php
  $conn = mysquli_connect('localhost','serveruser', 'gorgonzola7!');
  mysqli_select_db($conn, 'serverside');
  $sql ="INSERT INTO topic (title, description, author, created) VALUES ('".$_POST['title']."', '".$_POST['description']."', '".$_POST['author']."', now())";
  $result = mysqli_query($conn, $sql);   
?>
