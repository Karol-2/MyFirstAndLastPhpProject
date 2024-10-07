<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <!-- CALCULATOR -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"> 
    <!-- sends data to itself -->

    <input type="number" name="num01" placeholder="First number...">
    <select name="operator">
        <option value="add">+</option>
        <option value="substract">-</option>
        <option value="multiply">*</option>
        <option value="divide">/</option>
    </select>
    <input type="number" name="num02" placeholder="Second number...">

    <button type="submit">Calculate</button>
    </form>

    <?php 

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            // grab data
            $num01 = filter_input(INPUT_POST == "POST", "num01",FILTER_SANITIZE_NUMBER_FLOAT);
            $num02 = filter_input(INPUT_POST == "POST", "num02",FILTER_SANITIZE_NUMBER_FLOAT);
            $operator = htmlspecialchars($_POST["operator"]);

            // error handlers
            $errors = false;

            if(empty($num01) || empty($num02) || empty($operator)){
                echo "<p>Fill in all the fields!</p>";
                $errors = true;
            }

            if(!is_numeric($num01) || !is_numeric($num02)){
                echo "<p>Enter ONLY numbers!</p>";
                $errors = true;
            }

            // Calculate
            if(!$errors){
                $value = 0;
                switch ($operator) {
                    case 'add':
                        $value = $num01 + $num02;
                        break;
                    case 'substract':
                        $value = $num01 - $num02;
                        break;
                    case 'multiply':
                        $value = $num01 * $num02;
                        break;
                    case 'divide':
                        $value = $num01 / $num02;
                        break;    
                    
                    default:
                        echo "<p>Something went wrong :( !</p>";
                        break;
                }

                echo "<p>Result = " . $value . "</p>";
            }
        }
    
    ?>
</body>
</html>