<?php 
    class Movie {
        public $title;
        private $rating;

        function __construct($title, $rating){
            $this-> title = $title;
            $this-> setRating($rating);
        }

        function getRating(){       // get function
            return $this->rating;
        }

        function setRating($rating){    //set function, dahil sa function na ito hindi na basta basta makakapaag set ang user ng kahit  anong rating 
           if($rating == "G"|| $rating == "PG" || $rating == "PG-13" || $rating == "R" || $rating == "NR"){
                $this->rating = $rating;
           }else{
            $this->rating = "NR";
           }
        }
    }

    $avengers = new Movie ("Avengers", "Dog"); // dahil invalid magiging NR ang lalabas.

    echo $avengers->getRating();
    
?>