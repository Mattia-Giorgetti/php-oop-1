<?php
include_once __DIR__ . '/Models/Movies.php';

$Taken = new Movie('taken.jpeg', 'Taken', '1h 33m', 2008, ['Azione/ ', 'Thriller']);
$GliAristogatti = new Movie('aristogatti.jpeg', 'Gli Aristogatti', '1h 18m', 1970, ['Per famiglie/ ', 'Avventura']);
$TheBatman = new Movie('thebatman.jpeg', 'The Batman', '2h 56m', 2022, ['Azione/ ', 'Avventura']);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP OOP Movies</title>
</head>

<body>
    <h1>OOP Movies</h1>
    <div class="wrapper">
        <div class="movie_card">
            <div class="movie_pic">
                <img src="./img/<?php echo $Taken->pic ?>" alt="">
            </div>
            <h4>
                Titolo:
                <?php echo $Taken->title ?>
            </h4>
            <p>
                Durata:
                <?php echo $Taken->duration ?>
            </p>
            <p>
                Anno:
                <?php echo $Taken->year ?>
            </p>
            <p>
                Genere:
                <?php echo implode($Taken->genres) ?>
            </p>
            <p>
                Prezzo noleggio:
                <?php echo $Taken->setPrice($Taken->year) . "€" ?>
            </p>
        </div>

        <div class="movie_card">
            <div class="movie_pic">
                <img src="./img/<?php echo $GliAristogatti->pic ?>" alt="">
            </div>
            <h4>
                Titolo:
                <?php echo $GliAristogatti->title ?>
            </h4>
            <p>
                Durata:
                <?php echo $GliAristogatti->duration ?>
            </p>
            <p>
                Anno:
                <?php echo $GliAristogatti->year ?>
            </p>
            <p>
                Genere:
                <?php echo implode($GliAristogatti->genres) ?>
            </p>
            <p>
                Prezzo noleggio:
                <?php echo $GliAristogatti->setPrice($GliAristogatti->year) . "€" ?>
            </p>
        </div>

        <div class="movie_card">
            <div class="movie_pic">
                <img src="./img/<?php echo $TheBatman->pic ?>" alt="">
            </div>
            <h4>
                Titolo:
                <?php echo $TheBatman->title ?>
            </h4>
            <p>
                Durata:
                <?php echo $TheBatman->duration ?>
            </p>
            <p>
                Anno:
                <?php echo $TheBatman->year ?>
            </p>
            <p>
                Genere:
                <?php echo implode($TheBatman->genres) ?>
            </p>
            <p>
                Prezzo noleggio:
                <?php echo $TheBatman->setPrice($TheBatman->year) . "€" ?>
            </p>
        </div>
    </div>
</body>

</html>