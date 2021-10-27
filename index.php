<?php

class Movie {
    public $title;
    public $genre;
    public $duration;
    public $releaseDate;
    public $description;


    /**
     * Create a new Movie
     *
     * @param string $title
     * @param string $genre
     * @param integer $duration
     * @param string $releaseDate
     * @param string $description
     */
    function __construct($title,$genre,$duration,$releaseDate,$description)
    {
       $this->title = $title;
       $this->genre = $genre;
       $this->duration = $duration;
       $this->releaseDate = $releaseDate;
       $this->description = $description;
    }

    /**
     * Get title of Movie class
     *
     * @return string
     */
    public function getTitle(){
        return $this->title;
    }

    /**
     * Get genre of Movie class
     *
     * @return string
     */
    public function getGenre(){
        return $this->genre;
    }

    /**
     * Get duration of Movie class
     *
     * @return integer
     */
    public function getDuration(){
        return $this->duration;
    }


}



?>