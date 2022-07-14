
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
  <h2>JavaScript</h2>
  <ul>
	<script>
			list = new Array ("Sam", "Cholong", "BIT", "iBIT");
      i = 0;
      while(i < list.length){
        document.write("<li>" + list[i] + "</li>");
        i = i + 1;
      }
	</script>
  </ul>
  
  <h2>php</h2>
  <ul>
  <?php
    $list = array("Sam", "Cholong", "BIT", "iBIT");
    $i = 0;
    while($i < count($list)){
      echo "<li>".$list[$i]."</li>";
      $i = $i +1;
    }
  ?>
 </ul>
</body>
</html>
