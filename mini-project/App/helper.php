<?php
function FormatAmount(string $amount): string
{
    $isNegative = $amount < 0;
    return ($isNegative ? '-' : '') . '$' . (abs($amount));
}

function FormatDate(string $date): string
{
    return date("M j, Y", strtotime($date));
}
