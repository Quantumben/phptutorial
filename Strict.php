<?php declare(strict_types=1); // strict requirement

function addNumbers(int $a, string $b)
{
    return $a + $b;
}
echo addNumbers(5, "5 days");
// since strict is NOT enabled "5 days" is changed to int(5), and it will return 10
