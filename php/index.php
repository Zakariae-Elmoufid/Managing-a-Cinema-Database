<?php

require_once 'movie.php';

// Create movie instance
$TheGreenMile = new movie($pdo);

// Add movie details
$TheGreenMile->addMovie(
    "The  Mile",
    "Drame fantastique",
    "189 minutes",
    "1999-12-10",
    "Frank Darabont",
    "David Morse"
);




$prisonBreak = new movie($pdo);

$prisonBreak->addMovie(
    "Prison Break",
    "Action",
    "45 minutes",
    "2005-08-29",
    "Paul Scheuring",
    "Wentworth Miller, Dominic Purcell"
);

$TheGreenMile->updateMovie(1, "The Green Mile", "Fantasy Drama", "190 minutes", "1999-12-10", "Frank Darabont", "Warner Bros");


$movie = $TheGreenMile->getMovies();
echo '<pre>';
print_r( $movie);
echo '</pre>';







?>
