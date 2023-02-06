<?php

$tutionFee = 7001;

$commission = ($tutionFee >= 20000) ? "25%" : (($tutionFee >= 10000 && $tutionFee < 20000) ? "20%" : (($tutionFee > 7000 && $tutionFee < 10000) ? "15%" : (($tutionFee > 7000) ? "10%" : (($tutionFee < 7000) ? 'Invalid' : 'Invalid'))));

echo $commission;
