<?php

function generateSeries(int $limit)
{
    return range(1, $limit);
}

function square(int $base)
{
    return $base ** 2;
}

function squareOfSums(int $number)
{
    return square(array_sum(generateSeries($number)));
}

function sumOfSquares(int $number)
{
    return array_sum(array_map('square', generateSeries($number)));
}

function difference(int $number)
{
    return squareOfSums($number) - sumOfSquares($number);
}
