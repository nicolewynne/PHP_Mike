<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getting User Input</title>
</head>
<body>
    <form action="userinput.php" method="get">
       Name: <input type="text" name="username">
       <br><br>
       Age: <input type="number" name="age">
       <br><br>
       Birthdate: <input type="date" name="bd">
       <br><br>
       <input type="submit">
    </form>
    <br>
   <?php
    $name = $_GET["username"];
    $age = $_GET["age"];
    $bd = $_GET["bd"];
    echo "Your name is $name<br>";
    echo "Your age is $age<br>";
    echo "Your birthdate is $bd<br>";
   ?>
   <br><br>
   <!-- Building a better caculator -->
   <form action="userinput.php" method="post">
    Num1:<input type="number" step="0.0001" name="num1"><br>
    Operator: <input type="text" name="op"><br>
    Num2:<input type="number" step="0.0001" name="num2"><br>
    <input type="submit" value="calculate"><br><br>
   </form>
   <?php
   $num1 = $_POST["num1"];
   $op = $_POST["op"];
   $num2 = $_POST["num2"];

   if($op== "+"){
    echo $num1+$num2;
   }else if($op=="-"){
    echo $num1-$num2;
   }else if($op=="*"){
    echo $num1*$num2;
   }else if($op=="/"){
    echo $num1/$num2;
   }else{
    echo "Invalid Operator";
   }
   ?>
</body>
</html>