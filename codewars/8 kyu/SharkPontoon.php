<!-- https://www.codewars.com/kata/57e921d8b36340f1fd000059 -->

<?php

function shark(int $pontoonDistance, int $sharkDistance, int $youSpeed, int $sharkSpeed, bool $dolphin): string
{
    if ($dolphin) {
        $sharkSpeed /= 2;
    }
    $sharkEatTime = $sharkDistance / $sharkSpeed;
    $safeTime = $pontoonDistance / $youSpeed;

    return $sharkEatTime < $safeTime ? "Shark Bait!" : "Alive!";
}
