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
                    echo '<li><a href="http://localhost:31337/webapplication/php/data/index.php?id='.htmlspecialchars($row['id']).'">'.$row['title'].'</a></li>'."\n";
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
                $sql = "SELECT topic.id,title,name,description FROM topic LEFT JOIN user ON topic.author = user.id WHERE topic.id=".$_GET['id'];
                $result = myquli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                echo '<h2>'.htmlspecialchars($row['title']).'</h2>';
                echo '<p>'.htmlspecialchars($row['name']).'</p>;
                echo htmlspecialchars($row['description']);
            }
        ?>
    </article>
    <script src="http://localhost:31337/webapplication/php/data/script.js"></script>
</body>
</html>
