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
    function sayHi($name, $age){
        echo "Hello, my name is $name. I am $age <br>";
    }

    sayHi("Nicole", 16);
    sayHi("Taylor", 33);
    echo "<br><br>";

   ?>
   <form action="functions.php" method="post">
    <input type="number" name="num"><br>
    <input type="submit">;
   </form>
   <?php
    function cube($num){
        return $num*$num*$num;
    }
    $cubeResult = cube($_POST["num"]);
    echo $cubeResult;
   ?>
</body>
</html>