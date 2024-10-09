<?php 

// creo la classe movie
class Movie {

    // proprietà che servono per assegnare un valore 
    public $name;
    public $length;
    public $vote;

    // creo una funzione che assegna agli argomenti name, length e voto
    function __construct(
        string $_name,
        string $_length,
        int $_vote,
    ){
        $this->name ="$_name";
        $this->length = "$_length";
        $this->vote = $_vote;
    }
}

// Creo un oggetto di tipo "Movie" con propietà name, length e voto
$atlantis = new Movie("Atlantis", "1h 20m", 5);

$eldorado = new Movie("El Dorado", "1h 29m", 7);

$ilPianetaDelTesoro = new Movie("Il Pianeta del tesoro", "1h 35m", 9);

$LeFollieDellImperatore = new Movie("Le Follie dell'Imperatore", "1h 18m", 9);

var_dump($atlantis);
var_dump($eldorado);
var_dump($ilPianetaDelTesoro);
var_dump($LeFollieDellImperatore);

?>