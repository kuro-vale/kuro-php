<?php
// https://www.codewars.com/kata/5bb0c58f484fcd170700063d/php

function pillars($numberOfPillars, $dist, $width): int
{
    $dist *= 100;
    return $numberOfPillars == 1 ? 0 :
        ($dist * ($numberOfPillars - 1)) + ($width * ($numberOfPillars - 2));
}

echo pillars(2, 20, 10);
