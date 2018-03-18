<?php

//
// This is only a SKELETON file for the "Hamming" exercise. It's been provided as a
// convenience to get you started writing code faster.
//

function distance($a, $b)
{
    if (strlen($a) !== strlen($b)) {
        throw new \InvalidArgumentException('DNA strands must be of equal length.');
    }

    return array_sum(
        array_filter(
            array_map(
                function ($v, $v2) {
                    return $v !== $v2;
                },
                str_split($a),
                str_split($b)
            )
        )
    );
}
