<?php
declare(strict_types=1);
$x = 1;
$y = 2;
$z = $x + $y;
$a = 4;
$b = $a * $x;
function onTick()
{
    echo "Ticked";
}

register_tick_function('onTick');

declare(ticks=1);
