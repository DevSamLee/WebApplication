<?php
function db_init($host, $dbuser, $dbpw, $dbname){
  $conn = mysquli_connect($host, $dbuser, $dbpw);
  mysqli_select_db($conn, $dbname);
  return $conn;
}
?>
