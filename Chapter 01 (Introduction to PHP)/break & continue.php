<?php

for($i = 0; $i <10; $i++) {
    if($i % 2 === 0) {
        continue;
    }else if ($i === 7){
        break;
    }else{
        echo($i . " ");
    }
}