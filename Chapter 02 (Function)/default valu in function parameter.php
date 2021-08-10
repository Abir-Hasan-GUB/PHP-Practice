<?php

function serve($coffee = 1, $chicken = 1) {
    echo "{$coffee} cup Coffee & {$chicken} pice chicken has been served..."."\n";
}

serve();
serve(5, 2);