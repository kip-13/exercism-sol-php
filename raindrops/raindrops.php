<?php

function raindrops($number)
{
    $factorNumbers = [
        'Pling' => 3,
        'Plang' => 5,
        'Plong' => 7
    ];

    return array_reduce(
        array_keys($factorNumbers),
        function ($c, $i) use ($factorNumbers, $number) {
            return $c .= $number % $factorNumbers[$i] < 1
                ? $i
                : '';
        }
    ) ?: (string) $number;
}
