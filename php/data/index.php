<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="http://localhost/style.css">
    <title>JavaScript</title>
</head>
<body id="target">
    <header>
        <h1><a href="http://localhost/php/index.php">JavaScript</a></h1>
    </header>
    <nav>
        <ol>
           <?php
                echo file_get_contents('list.txt');
            ?>
        </ol>
    </nav>
    <div id="control">
        <input type="button" value="white" id="white_btn" />
        <input type="button" value="black" id="black_btn" />
    </div>
    <article>
        <?php
            if(!empty($_GET['id'])){
                echo file_get_contents($_GET['id'].' .txt');
            }
        ?>
    </article>
    <script src="http://localhost/script.js"></script>
</body>
</html>