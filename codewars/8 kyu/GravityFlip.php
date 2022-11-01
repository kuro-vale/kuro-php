// https://www.codewars.com/kata/5f70c883e10f9e0001c89673/php

<?php

function flip(string $dir, array $arr): array
{
    if ($dir == 'L') {
        rsort($arr);
    } elseif ($dir == 'R') {
        sort($arr);
    } else {
        echo "Please enter a valid direction ('L' or 'R')";
    }
    return $arr;
}
