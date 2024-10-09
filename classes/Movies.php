<?php 

// creo la classe movie
class Movie {

    // proprietà che servono per assegnare un valore 
    public $name;
    public $length;

}

// Creo un oggetto di tipo "Movie"...
$atlantis = new Movie();
// che ha come proprietà name "Atlantis"
$atlantis->name = "Atlantis";
$atlantis->length = "1h 20m";

$eldorado = new Movie();
$eldorado-> name = "El Dorado";
$eldorado->length = "1h 29m";

$ilPianetaDelTesoro = new Movie();
$ilPianetaDelTesoro-> name = "Il Pianeta del tesoro";
$ilPianetaDelTesoro->length = "1h 35m";

$LeFollieDellImperatore = new Movie();
$LeFollieDellImperatore-> name = "Le Follie dell'Imperatore";
$LeFollieDellImperatore->length = "1h 18m";

var_dump($atlantis);
var_dump($eldorado);
var_dump($ilPianetaDelTesoro);
var_dump($LeFollieDellImperatore);

?>