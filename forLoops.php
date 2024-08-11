<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /*$index = 1;
        while($index <=5){
            echo "$index <br>";
            $index++;
        }*/
        
        $luckNumbers = array(4, 8, 14, 16, 23, 42); //array

        for($i = 0; $i < count($luckNumbers); $i++){    //count(), eto yung nagbibilang sa array.
            echo "$luckNumbers[$i] <br>";   // $luckNumbers[$i], eto yung ginagawa para ma access ung laman ng array.
        }

    ?>  
</body>
</html>