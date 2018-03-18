<?php

function from(DateTime $date)
{
    $secs = pow(10, 9);
    $nDate = clone $date;

    return $nDate->add(
        new DateInterval(sprintf('PT%dS', $secs))
    );
}
