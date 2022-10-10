<?php

declare(strict_types=1); // strict requirement
function sum(int $x, int $y)
{
    $z = $x + $y;
    return $z;
}

echo  sum(5, 10) . "<br>";
echo sum(7, 13) ."<br>";
echo sum(2, 4);
