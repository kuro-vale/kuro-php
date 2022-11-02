<?php
// https://www.codewars.com/kata/5b853229cfde412a470000d0/php

function twice_as_old($dad_years_old, $son_years_old): int
{
    return abs($dad_years_old - $son_years_old * 2);
}

echo twice_as_old(36, 7);
