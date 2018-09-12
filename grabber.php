<?php
    $grabInTheaters = simplexml_load_file("inTheaters.xml");
    $inTheaters = $grabInTheaters->data;
    $openingThisWeek = $inTheaters->movies[0]->movie;
    $inTheatersNow = $inTheaters->movies[1]->movie;

?>
