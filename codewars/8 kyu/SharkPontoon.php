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
