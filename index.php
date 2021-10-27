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

    /**
     * Get releaseDate of Movie class
     *
     * @return string
     */
    public function getReleaseDate(){
        return $this->releaseDate;
    }

    /**
     * Get description of Movie class
     *
     * @return string
     */
    public function getDescription(){
        return $this->description;
    }
}

$movieOne = new Movie('Dune',' Sci-fi/Avventura',155,'3 September 2021',"In un distante futuro dell'umanità, il duca Leto Atreides accetta la gestione di un pericoloso pianeta, Dune, l'unica fonte di una droga in grado di allungare la vita e fornire eccezionali capacità mentali.");
$movieTwo = new Movie('Qui rido io','Drammatico',133,'9 settembre 2021',"Eduardo Scarpetta, autore e attore teatrale di successo, decide di mettere in scena una parodia di La figlia di Iorio di Gabriele D'Annunzio. Quando viene denunciato per plagio da D'Annunzio, la sua vita sembra andare in frantumi.");

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>
</head>
<body>
    <main>
        <section>
            <h1>Primo film</h1>
            <div>
                <h2>Titolo: </h2>
                <p>Genere: </p>
                <p>Durata:    minuti</p>
                <h5>Data di uscita </h5>
                <p>Trama: </p>
            </div>
        </section>
        
        <section>
            <h1>Secondo film</h1>
            <div>
            <h2>Titolo: </h2>
                <p>Genere: </p>
                <p>Durata:    minuti</p>
                <h5>Data di uscita </h5>
                <p>Trama: </p>
            </div>
        </section>
        
    </main>
</body>
</html>