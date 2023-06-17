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
    class Movie{
        public $title;
        private $rating;

        function __construct($title, $rating){
            $this->title = $title;
            $this->setRating($rating);
        }

        function getRating(){
            return $this->rating;
        }
        function setRating($rating){
            if($rating>=1 && $rating<=10){
                $this->rating = $rating;
            }
            // else if($rating<1 || $rating>10){
                // echo "Invalid rating number";
            // }
            else{
                $this->rating = "not invalid rating";
            }
        }
    }

    $movie1 = new Movie("Little Women", "Kitten");

    $movie1->setRating(8.2);
    echo $movie1->getRating();

    ?>
</body>
</html>