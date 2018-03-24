<?php

function toRna($dna)
{
    $definitions = [
        'G' => 'C',
        'C' => 'G',
        'T' => 'A',
        'A' => 'U'
    ];

    return array_reduce(
        str_split($dna),
        function ($c, $i) use ($definitions) {
            return $c .= isset($definitions[$i])
                ? $definitions[$i]
                : $i;
        }
    );
}
