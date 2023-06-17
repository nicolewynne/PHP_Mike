<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <!-- <?php
    echo("NIcole Blog");
    echo ("<hr>");
    echo("Hi, my name is Nicole")
    ?> -->

    <!-- Building a mad libs game -->
    <form action="html-in-php.php" method="get">
    Color: <input type="text" name="color"><br>
    Plural Noun: <input type="text" name="pluralNoun"><br>
    Celebrity: <input type="text" name="celeb"><br>
    <input type="submit">
    </form>
    <?php
    $color = $_GET["color"];
    $pluralNoun = $_GET["pluralNoun"];
    $celeb = $_GET["celeb"];

    echo "Roses are $color <br>";
    echo "$pluralNoun are blue <br>";
    echo "I love $celeb";
    ?>
</body>
</html>