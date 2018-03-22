<?php

function encode($input)
{
    preg_match_all('/(.)\1*/', $input, $matches);

    return array_reduce($matches[0], function ($c, $i) {
        $length = mb_strlen($i);

        return sprintf(
            '%s%s%s',
            $c,
            $length > 1 ? $length : '',
            $i[0]
        );
    });
}

function decode($input)
{
    preg_match_all('/(\d+)?(.)/', $input, $matches, PREG_SET_ORDER);

    return array_reduce($matches, function ($c, $i) {
        return sprintf(
            '%s%s',
            $c,
            str_repeat($i[2], $i[1] ?: 1)
        );
    });
}
