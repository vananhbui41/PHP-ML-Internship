<?php

function calcMinPrice($price, $stepPrices, $rivalryPrice) {
    // insert code here
    $result = $price;
    $stepArray = array_keys($stepPrices);
    $valueArray = array_values($stepPrices);
    $i = 0;
    while ($i < count($stepArray)) {
        if ($result > $rivalryPrice) {
            break;
        }   
        if ($result > $stepArray[$i] && $result < $stepArray[$i+1]) {
            $result += $valueArray[$i];
        }
        else $i++;
    }
    return $result;
}

