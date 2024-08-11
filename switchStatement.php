<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "switchStatement.php" method = "post">
        What was your grade? <br>
        <input type = "text" name = "grade">
        <input type = "submit">
        <br>
    <?php
       $grade = $_POST["grade"];
       
       switch ($grade){
        case "A":
            echo "You did Amazing!";
            break;
        case "B":
            echo "You did pretty good!";
            break;
        case "C":
            echo "You did poorly!";
            break;
        case "D":
            echo "You did very bad!";
            break;
        case "F":
            echo "You FAIL!";
            break;
        default:
            echo "Invalid Input! Consider this (A, B, C, D, E, F)";
            break;
       }
    ?>
</body>
</html>