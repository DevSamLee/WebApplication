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
        <form action="process.php" method="post">
        <p>
            Title: <input type="text" name="title">
        </p>
        <p>
            Author: <input type="text" name="author">
        </p>
        <p>
            Description: <textarea name="description" id="description"></textarea>
        </p>
        <input type="hidden" role="uploadcare-uploader" />
        <input type="submit" name="name">  
        </form>
    </article>
    <script src="http://localhost:31337/webapplication/php/data/script.js"></script>
    <script>
        UPLOADCARE_PUBLIC_KEY = "";
    </script>
    <script charset="utf-8"
       src="//ucarecdn.com/widget/2.9.0/uploadcare/uploadcare.full.min.js></script>
    <script>
    <!-- create widget -->
    var singleWidget = uploadcare.SingleWidget('[role=uploadcare-uploader]');
    singleWidget.onUploadComplete(function(info){
       document.getElementById('description').value = document.getElementById('description').value + '<img src="'info.cdnUrl+'">'; 
    });
    </script>
    </body>
</html>
