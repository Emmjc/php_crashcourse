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

            function __construct($aTitle, $aAuthor, $aPages){        // eto yung constructor, para siyang function sa loob ng class.
                $this->title = $aTitle;
                $this->author = $aAuthor;
                $this->pages = $aPages;
            }
        }

        $book1 = new Book("Harry Potter", "JK Rowling", 400);  // instance of a class na tawag ay object.
        $book2 = new Book("Lord of the Rings", "Tolkien", 700);  // instance of a class na tawag ay object.

        echo $book1-> author;
    ?>
</body>
</html>