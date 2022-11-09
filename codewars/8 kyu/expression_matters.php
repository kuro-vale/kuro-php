<!-- https://www.codewars.com/kata/5ae62fcf252e66d44d00008e/php -->

<?php

function expressionMatter($a, $b, $c)
{
    return max([
        $a * $b * $c,
        $a + $b + $c,
        ($a + $b) * $c,
        $a * ($b + $c),
    ]);
}

echo expressionMatter(5, 3, 1);
