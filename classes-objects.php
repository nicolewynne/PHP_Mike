<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Book{
        var $title;
        var $author;
        var $pages;
    };
    $book1 = new Book($aTitle, $aAuthor, $aPages);
    $book1->$title= "The Tunnel";
    $book1->$author= "Mitchell";
    $book1->$pages= 500;

    echo $book1->$title;

    $book2 = new Book($aTitle, $aAuthor, $aPages);
    $book2->$title= "Sailing through the rain";
    $book2->$author= "Lowen";
    $book2->$pages= 500;
    ?>
</body>
</html>