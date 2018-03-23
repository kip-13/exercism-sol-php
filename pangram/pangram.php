<?php

define('ALPHABET', implode(range('a', 'z')));

function isPangram($string)
{
    preg_match_all('/./u', $string, $matches);

    $filterLetters = array_filter($matches[0], function ($letter) {
        return mb_stristr(ALPHABET, $letter);
    });

    return count(array_unique($filterLetters)) >= strlen(ALPHABET);
}
