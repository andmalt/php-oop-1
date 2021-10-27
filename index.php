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
}



?>