<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch statement</title>
</head>
<body>
    <!-- Switch Statement -->
    <form action="switch.php" method="post">
        What is the season? <br>
        <input type="text" name="season" ><br>
        <input type="submit"><br><br>
    </form>

    <?php
    $season = $_POST["season"];
    switch($season){
        case"Spring":
            echo "It's from March to May";
        break;
        case"Summer":
            echo "It's from June to August";
        break;
        case"Autumn":
            echo "It's from September to November";
        break;
        case"Winter":
            echo "It's from December to February";
        break;
        default: echo "Invalid season";

    }
    ?>
</body>
</html>