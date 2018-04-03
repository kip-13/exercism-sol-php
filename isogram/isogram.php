<?php

function isIsogram($word)
{
    return ! preg_match('#(\w).*\1#iu', $word);
}
