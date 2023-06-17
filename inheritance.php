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
    class Chef{
        function makesRoastedChicken(){
            echo "Chef can make roasted chicken </br>";
        }
        function makesSalad(){
            echo "Chef can make Salad </br>";
        }
        function makesSpecialDish(){
            echo "Chef can make bbq ribs </br>";
        }
    }
    class ItalianChef extends Chef{
        function makesSpaghetti(){
            echo "Italian chef can make spaghetti </br>";
        }
        function makesSpecialDish(){
            echo " Italian chef can make lasanga </br>";
        }

    }
    
    $normalchef = new Chef();
    echo $normalchef->makesSalad();
    $italianchef = new  ItalianChef();
    echo $italianchef->makesSpecialDish();
    
    ?>
</body>
</html>