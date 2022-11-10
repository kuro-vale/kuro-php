<!-- https://www.codewars.com/kata/5a3fe3dde1ce0e8ed6000097/php -->

<?php

function centuryFromYear($year): int
{
    return ceil($year / 100);
}

echo centuryFromYear(2001);
