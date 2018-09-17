<?php
    $grabInTheaters = simplexml_load_file("inTheaters.xml");
    $inTheaters = $grabInTheaters->data;
    $openingThisWeek = $inTheaters->movies[0]->movie;
    $inTheatersNow = $inTheaters->movies[1]->movie;

    $grabComingsoon = simplexml_load_file("comingSoon.xml");
    $comingsoonweek = $grabComingsoon -> data -> movies;
    $Comingsoon = $comingsoonweek-> movie;

    $countComingsoon = count($comingsoonweek);
    $countOpeningThisWeek = count($openingThisWeek);
    $countInTheatersNow = count($inTheatersNow);



?>
