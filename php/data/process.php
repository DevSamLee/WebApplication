<?php
  require("config/config.php");
  require("lib/db.php");
  $conn = db_init($config["host"], $config["dbuser"], $config["dbpw"], $config["dbname"]);
  $sql ="INSERT INTO topic (title, description, author, created) VALUES ('".$_POST['title']."', '".$_POST['description']."', '".$_POST['author']."', now())";
  $result = mysqli_query($conn, $sql);
  header('Location: http://localhost:31337/webapplication/php/data/index.php');
?>
