<?php
    require("config/config.php");
    require("lib/db.php");
    $conn = db_init($config["host"], $config["dbuser"], $config["dbpw"], $config["dbname"]);
    $result = mysqli_query($conn, 'SELECT * FROM javascript');   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="stylesheet" type="text/css" href="http://localhost:31337/webapplication/php/data/style.css">
    <title>JavaScript</title>
    
    <!-- Bootstrap -->
    <link href="http://localhost:31337/webapplication/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body id="target">
    <div class="container">
        <header class="jumbotron text-center">
            <h1><a href="http://localhost:31337/webapplication/php/data/index.php">JavaScript</a></h1>
        </header>
        <div class="row">
            <nav class="col-md-3">
                <ol>
                   <?php
                        while($row = mysqli_fetch_assoc($result)) {
                            echo '<li><a href="http://localhost:31337/webapplication/php/data/index.php?id='.htmlspecialchars($row['id']).'">'.$row['title'].'</a></li>'."\n";
                        }
                    ?>
                </ol>
            </nav>
        <div class="col-md-9">
            <div id="control">
                <div class="btn-group" role="group" aria-label="...">
                    <input type="button" value="white" id="white_btn" class="btn btn-default" />
                    <input type="button" value="black" id="black_btn" class="btn btn-default" />
                </div>
                <a href="http://localhost:31337/webapplication/php/data/write.php" class="btn btn-default">write</a>
            </div>    
            <article>
                <?php
                    if(!empty($_GET['id'])){
                        $sql = "SELECT topic.id,title,name,description FROM topic LEFT JOIN user ON topic.author = user.id WHERE topic.id=".$_GET['id'];
                        $result = myquli_query($conn, $sql);
                        $row = mysqli_fetch_assoc($result);
                        echo '<h2>'.htmlspecialchars($row['title']).'</h2>';
                        echo '<p>'.htmlspecialchars($row['name']).'</p>;
                        echo strip_tags($row['description'], '<a><h1><h2><h3><ul><li><ol>');
                    }
                ?>
            </article>
       </div>
    </div>
    <script src="http://localhost:31337/webapplication/php/data/script.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://localhost:31337/webapplication/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
</body>
</html>
