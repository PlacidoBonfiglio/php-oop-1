<?php 

// creo la classe movie
class Movie {

    // proprietà che servono per assegnare un valore 
    public $name;
    public $length;
    public $genre;
    public $vote;

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
}

// Creo un oggetto di tipo "Movie" con propietà name, length e voto
$theRing = new Movie("The ring", "1h 55m", "Horror", 7);

$furiosa = new Movie("Furiosa: A Mad Max Saga", "2h 28m", "Action", 7);

$ilPianetaDelTesoro = new Movie("Il Pianeta del tesoro", "1h 35m", "Adventure", 8);

$LeFollieDellImperatore = new Movie("Le Follie dell'Imperatore", "1h 18m", "Adventure", 8);

var_dump($theRing);
var_dump($furiosa);
var_dump($ilPianetaDelTesoro);
var_dump($LeFollieDellImperatore);

?>