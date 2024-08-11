<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        class Chef {
            function makeChicken(){
                echo "The chef makes chicken <br>";
            }

            function makeSalad(){
                echo "The chef makes salad <br>";
            }

            function makeSpecialDish(){
                echo "The chef makes bbq ribs <br>";
            }
        }

        class ItalianChef extends Chef {    // na inherit ni Italian chef lahat ng laman ni Chef, kasi naka extend. Inheritancr tawag doon.
            
            function makePasta(){
                echo "The chef makes pasta <br>";
            }
            function makeSpecialDish(){     //method overriding kasi ung na inherit niya is may iniba siya na gusto niya gawin doon. na override kung baga.
                echo "The chef makes chicken parm <br>";
            }
        }

        $chef = new Chef();
        $chef -> makeSpecialDish();

        $chef = new ItalianChef();
        $chef -> makeSpecialDish();
    ?>
</body>
</html>