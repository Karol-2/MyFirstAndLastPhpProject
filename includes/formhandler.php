<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){// sprawdzanie czy user wszedł prawidłowa droga, a nie wpisał nazwe pliku

    $firstname = htmlspecialchars($_POST["firstname"]) ; //htmlspecial chroni przed js injection
    $lastname = htmlspecialchars($_POST["lastname"]);
    $favouritepet = htmlspecialchars($_POST["favouritepet"]);

    if (empty($firstname)){ 
        //its empty
        exit();
        header("Location: ../index.php"); // send back with error msg
    }

    echo "These are received data:";
    echo "<br>";
    echo $firstname;
    echo "<br>";
    echo $lastname;
    echo "<br>";
    echo $favouritepet;
    echo "<br>";

   

}
else {
    header("Location: ../index.php"); // send user back to the frontpage
}