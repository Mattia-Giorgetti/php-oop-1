<div class="wrapper">
    <?php foreach ($Movies as $item) { ?>

    <div class="movie_card">
        <div class="movie_pic">
            <img src="./img/<?php echo $item->pic ?>" alt=" <?php echo $item->title ?>">
        </div>
        <h4>
            Titolo:
            <?php echo $item->title ?>
        </h4>
        <p>
            Durata:
            <?php echo $item->duration ?>
        </p>
        <p>
            Anno:
            <?php echo $item->year ?>
        </p>
        <p>
            Genere:
            <?php echo ($item->genres->fistGenre) . '/' . ($item->genres->secondGenre) ?>
        </p>
        <p>
            Prezzo noleggio:
            <?php echo $item->setPrice($item->year) . "€" ?>
        </p>
    </div>
    <?php }
    ; ?>
</div>