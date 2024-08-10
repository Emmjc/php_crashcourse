<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        $phrase = "Giraffe Academy";

        echo strtolower($phrase);   //tolower or toupper
        echo strlen($phrase);   //length of str
        echo $phrase[0];    //index
        echo str_replace("Giraffe", "Panda", $phrase); //to replace certain str to another str
        echo substr($phrase, 8,3); //sub strings
    ?>

</body>
</html>