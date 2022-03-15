<?php

    class Movie{
        public $title;
        public $italianTitle;
        public $author;
        public $genre;

        public function __construct($title, $italianTitle){
            $this->title = $title;
            $this->italianTitle = $italianTitle;
        }

        public function controllaGenere(){
            if($this->genre == "horror"){
                echo "<h1>" . "che paura" . "</h1>";
            }else if($this->genre == "commedia"){
                echo "<h1>" . "che ridere" . "</h1>";
            }else{
                echo "<h1>" . "non so che genere è" . "</h1>";
            }
        }
    }

    //istanza film star wars
    $starWars= new Movie("star wars", "guerre stellari");
    $starWars->genre = "fantascienza";
    $starWars->controllaGenere();

    //istanza the conjuring
    $conjuring = new Movie("the conjuring", "the conjuring");
    $conjuring->genre = "horror";
    $conjuring->controllaGenere();

    echo "<p>" . $starWars->title . "</p>";
    echo "<p>" . $starWars->italianTitle . "</p>";
    echo "<p>" . $starWars->author . "</p>";
    echo "<p>" . $starWars->genre . "</p>";

    echo "<p>" . $conjuring->title . "</p>";
    echo "<p>" . $conjuring->italianTitle . "</p>";
    echo "<p>" . $conjuring->author . "</p>";
    echo "<p>" . $conjuring->genre . "</p>";



?>