<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        // $title = "My First Post";
        // $author = "Mj";
        // $wordCount = 400; 
        // include "articleHeader.php"
        
// dahil doon sa include statement pwede ko magamit mga functions sa ibang file dito sa file na ito.
        include "usefulTools.php";
        sayHi("Mj <br>");
        echo $feetInMile;
    ?>
</body>
</html>