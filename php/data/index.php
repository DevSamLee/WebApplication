<?php
    $conn = mysquli_connect('localhost','serveruser', 'gorgonzola7!');
    mysqli_select_db($conn, 'serverside');
    $result = mysqli_query($conn, 'SELECT * FROM javascript');   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="http://localhost:31337/webapplication/php/data/style.css">
    <title>JavaScript</title>
</head>
<body id="target">
    <header>
        <h1><a href="http://localhost:31337/webapplication/php/data/index.php">JavaScript</a></h1>
    </header>
    <nav>
        <ol>
           <?php
                while($row = mysqli_fetch_assoc($result)) {
                    echo '<li><a href="http://localhost:31337/webapplication/php/data/index.php?id='.$row['id'].'">'.$row['title'].'</a></li>'."\n";
                }
            ?>
        </ol>
    </nav>
    <div id="control">
        <input type="button" value="white" id="white_btn" />
        <input type="button" value="black" id="black_btn" />
        <a href="http://localhost:31337/webapplication/php/data/write.php">Write</a>
    </div>
    <article>
        <?php
            if(!empty($_GET['id'])){
                echo file_get_contents($_GET['id'].".txt");
            }
        ?>
    </article>
    <script src="http://localhost:31337/webapplication/php/data/script.js"></script>
</body>
</html>
