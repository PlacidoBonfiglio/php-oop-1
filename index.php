<!-- PHP -->
<?php 
require_once __DIR__ . "/classes/Movies.php";

// Creo un array contenente i film
$movies = [
    $theRing,
    $furiosa,
    $ilPianetaDelTesoro,
    $LeFollieDellImperatore
];

?>

<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>

    <!-- BOOTSTRAP 5.3.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- CSS -->
     <link rel="stylesheet" href="style.css">

</head>

<body>
    <header>
        <h1 class="text-center fw-bold py-5">PHP OOP 1</h1>
    </header>

    <main>
        <div class="container">
            <section>
                <div class="row row-cols-3 gap-5 justify-content-center">

                    <?php foreach ($movies as $singleMovie) { ?>
                        <div class="col text-white py-5">
                            <h3 class="text-center mb-4"><?php echo $singleMovie->getName() ?></h3>
                            <div class="text-center">
                               <p>Durata del film: <span class="h5"><?php echo $singleMovie->getMovieLength() ?></span></p>
                                <p>Genere: <span class="h5"><?php echo $singleMovie->getGenre() ?></span></p>
                                <p>Voto medio: <span class="h5"><?php echo $singleMovie->getVote() ?></span></p>
                            </div>
                        </div>
                    <?php } ?>

                </div>
            </section>
        </div>
    </main>
</body>

</html>