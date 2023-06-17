<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <?php
    // Index Array
    $friends = array("Eh Hser", "Nway", "Thway Kaw");
    $friends[3]="Aye Kyawt";
    echo ($friends[3]);
    echo "<br>"; 
    echo count($friends);  echo "<br>";
    echo "<br>";

    // Associate array
    // $salary = array("Harry"=>"30000000", "Timmy"=>"40000000", "Cole"=>"20000000");
    // echo "Harry salary: ".$salary["Harry"]; echo "<br>";
    // echo "Timmy salary: ". $salary["Timmy"]; echo "<br>";
    // echo "Cole salary: ". $salary["Cole"]; echo "<br>";
    // echo  "<br>";
    ?>

    <!-- Using checkbox -->
    <form action="array.php" method="post">
   Apple :<input type="checkbox" name="fruits[]" value="apple"><br>
   Orange  :<input type="checkbox" name="fruits[]" value="orange"><br>
   Grape :<input type="checkbox" name="fruits[]" value="grape"><br>
   Banana :<input type="checkbox" name="fruits[]" value="banana"><br>
   Kiwi :<input type="checkbox" name="fruits[]" value="kiwi"><br>
   Cherry :<input type="checkbox" name="fruits[]" value="cherry"><br>
   Sunkist :<input type="checkbox" name="fruits[]" value="sunkist"><br>
   <input type="submit"><br><br>
   </form>

   <?php
    $fruits = $_POST["fruits"];
     echo $fruits[2];
   ?>
   <br><br>
  
   <!-- Associative Array -->
   <form action="array.php" method="post">
    <input type="text" name="student"><br>
    <input type="submit"><br>
   </form>
   <?php
   $grades = array("Chastin"=>"A-", "Harper"=>"C-", "Crew"=>"B", "Maria"=>"B-");

   echo $grades[$_POST["student"]];
   ?>


</body>
</html>