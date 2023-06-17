<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math and numbers</title>
</head>
<body>
    <?php
    // echo 2 + 4;
    // echo 433 - 324;
    // echo 9 * 4;
    // echo 10 / 3;
    // echo 36 % 5; 
    // echo 4 + 5 * 10;
    // echo (10 + 1) * 2;
    // echo pow(3, 4);
    // echo 3**3;
    // echo sqrt(144);
    // echo max(23, 12);
    // echo min(45, 34);
    // echo abs(-32);
    // echo round(24.68);
    // echo ceil(22.2);
    // echo floor(22.8);
    // $age = 10;
    // $age += 5;
    // echo $age;
    ?>
    <form action="mathandnumbers.php" method="get">
        first number: <input type="number" name="num1">
        <br>
        second number: <input type="number" name="num2">
        <br>
        <input type="submit" value="add"> 
        <br>
    </form>
    <?php
    echo $_GET["num1"] + $_GET["num2"]
     ?>
</body>
</html>