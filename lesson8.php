<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <!-- Conditions and Controle Structures -->
    <?php
    $a = 1;
    if($a === 5){

    } else if($a !== 4){

    }
    else{

    }
    
    switch($a) {
        case 1:
            echo "jeden";
            break;
        case 2:
            echo "dwa";
            break;
        default:
            echo "none";
            break;
    }

    $result = match ($a) {
        1,5,7,11 => "Variable a is equal to 1", // attaches value depending on the reulst
        2 => "Var a is equal to 2",
        default => "None were a match",
    }

    ?>
</body>
</html>