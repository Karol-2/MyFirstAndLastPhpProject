<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- SuperGlobal Variables -->
    <?php 
    echo $_SERVER["DOCUMENT_ROOT"]; // location of server 
    echo "<br>";
    echo $_SERVER["PHP_SELF"]; // location of this file
    echo "<br>";
    echo $_SERVER["SERVER_NAME"]; // localhost
    echo "<br>";
    echo $_SERVER["REQUEST_METHOD"]; // access method - GET
    echo "<br>";
    echo $_GET["name"]; // http://localhost/MyFirstPhpProject/index.php?name=dani
    echo "<br>";
    echo $_REQUEST["name"]; // is lookking for get, request or cookies
    echo "<br>";
    echo $_FILES["filename"]; // shows file info
    echo "<br>";
    echo $_COOKIE["name"]; // lists cookie info
    echo "<br>";
    $_SESSION["username"] = "Karolek";
    echo $_SESSION["name"]; // lists cookie info
    echo $_SESSION["username"];
    echo $_ENV["envName"]; // env variable


    ?>
   
</body>
</html>