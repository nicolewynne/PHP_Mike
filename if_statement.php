<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <?php
    $lower30 = false;
    $upper20 = true;
    if($lower30 && $upper20){
        echo "The weather is nice";
    }
    else if(!$lower30 && $upper20){
        echo "The weather is hot";
    }
    else if($lower30 && !$upper20){
        echo "The weather is cold";
    }
    else {
        echo "The weather is bad";
    }
    ?> -->

    <?php
    function getMax($num1, $num2, $num3){
        if($num1>=$num2 && $num1>=$num3){
            return $num1;
        } else if($num2>=$num1 && $num2>=$num3){
            return $num2;
        }
        else {return $num3;}
    }

    echo getMax(637,25,45);
    ?>
</body>
</html>