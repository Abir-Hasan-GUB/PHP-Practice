<?php

function serve(int $coffee = 1, int $chicken = 1): string {
    return "{$coffee} cup Coffee & {$chicken} pice chicken has been served..."."\n";
}

$serve = serve();
echo $serve;

$serve = serve(5, 2);
echo $serve;