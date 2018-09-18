<?php
    $grabInTheaters = simplexml_load_file("http://www.myapifilms.com/imdb/inTheaters?token=beb0bac5-5a6f-4b5b-bffc-43a3e21467ae&format=xml&language=en-us");
    $inTheaters = $grabInTheaters->data;
    $openingThisWeek = $inTheaters->movies[0]->movie;
    $inTheatersNow = $inTheaters->movies[1]->movie;

    $countOpeningThisWeek = count($openingThisWeek);
    $countInTheatersNow = count($inTheatersNow);
?>
