<?php

$film=[
    "Indiana Jones and the last crusade"
    =>1989,
    "Indiana Jones and the Temple of Doom"
    =>1984,
    "Indiana Jones and the Raiders of the Lost Ark"
    =>1981
];
asort($film);

    foreach($film as $items =>$info) {
            echo "<hr/>";
            
            echo $items."-".$info;
        };

?>