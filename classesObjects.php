<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        class Book {    //blueprint or ung class mismo
            var $title;
            var $author;
            var $pages;
        }

        $book1 = new Book;  // instance of a class na tawag ay object.
        $book1 -> title = "Harry Potter";
        $book1 -> author = "JK Rowling";
        $book1 -> pages = 400;

        $book2 = new Book;  // instance of a class na tawag ay object.
        $book2 -> title = "Lord of the Rings";
        $book2 -> author = "Tolkien";
        $book2 -> pages = 700;

        echo $book2-> author;
    ?>
</body>
</html>