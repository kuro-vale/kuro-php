<?php
// https://www.codewars.com/kata/5b077ebdaf15be5c7f000077/php

function countsheep($num): string
{
    $sheep = "";
    for ($i = 1; $i <= $num; $i++) {
        $sheep .= "$i sheep...";
    }
    return $sheep;
}

echo countsheep(2);
