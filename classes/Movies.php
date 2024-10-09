<?php 

// creo la classe movie
class Movie {

    // proprietà che servono per assegnare un valore 
    protected $name;
    protected $length;
    protected $genre;
    protected $vote;

    // creo una funzione che assegna agli argomenti name, length e voto
    function __construct(
        string $_name,
        string $_length,
        string $_genre,
        int $_vote,
    ){
        $this->name ="$_name";
        $this->length = "$_length";
        $this->genre = "$_genre";
        $this->vote = $_vote;
    }

    // funzioni che mi permettono di prendere il volore delle proprietà e all'occorrenza stamparli in pagina
    public function getName() : string {
        return $this->name;
    }

    public function getMovieLength() : string {
        return $this->length;
    }

    public function getGenre() : string {
        return $this->genre;
    }

    public function getVote() : int {
        return $this->vote;
    }
}

// Creo un oggetto di tipo "Movie" con propietà name, length e voto
$theRing = new Movie("The ring", "1h 55m", "Horror", 7);

$furiosa = new Movie("Furiosa: A Mad Max Saga", "2h 28m", "Action", 7);

$ilPianetaDelTesoro = new Movie("Il Pianeta del tesoro", "1h 35m", "Adventure", 8);

$LeFollieDellImperatore = new Movie("Le Follie dell'Imperatore", "1h 18m", "Adventure", 8);

?>