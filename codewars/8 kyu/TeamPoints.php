<!-- https://www.codewars.com/kata/5bb904724c47249b10000131/php -->
<?php

function points(array $games): int
{
    $team_points = 0;
    foreach ($games as $game) {
        $match = explode(":", $game);
        if ($match[0] > $match[1]) {
            $team_points += 3;
        } elseif ($match[0] == $match[1]) {
            $team_points += 1;
        }
    }
    return $team_points;
}

echo points(['1:0', '2:0', '3:0', '4:0', '2:1', '3:1', '4:1', '3:2', '4:2', '4:3']);
