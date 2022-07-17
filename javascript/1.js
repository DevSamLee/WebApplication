<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Programming</title>
    <script>
        alert("Hello world"); // user cannot add input
        //prompt("Hello world"); // user can add input
    </script>
</head>
<body>
    <h1>Event Programming!</h1>
    <input type="button" value="white" onclick="alert('Hello world')" />
    <!-- Same function as line 9 -->
    <input type="text" onfocus="alert('focus')" onblur="alert('blur')" />    
</body>
</html>
