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
    class Student{
        var $name;
        var $major;
        var $gpa;

        function __construct($name, $major, $gpa){
            $this->name = $name;
            $this->major = $major;
            $this->name = $name;
        }
        function hasHonors(){
            if($this->gpa >= 3.5){
                return "True";
            }
              else  {return "False";}
              }
        }
        $student1 = new Student("Jay", "English", 2.8);
        $student2 = new Student("Candace", "Art", 3.8);
        
        echo $student1->hasHonors();

    ?>
</body>
</html>