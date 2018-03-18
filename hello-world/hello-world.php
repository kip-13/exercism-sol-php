<?php

//
// This is only a SKELETON file for the "Hello World" exercise.
// It's been provided as a convenience to get you started writing code faster.
//

function helloWorld()
{
    return implode(
        array_map(
            'chr',
            [72,101,108,108,111,44,32,87,111,114,108,100,33]
        )
    );
}
