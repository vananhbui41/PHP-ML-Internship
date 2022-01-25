<?php

function integerToRoman($n)
{
    // insert code here.
    $map = array(
        'M' => 1000, 
        'CM' => 900, 
        'D' => 500, 
        'CD' => 400, 
        'C' => 100, 
        'XC' => 90, 
        'L' => 50, 
        'XL' => 40, 
        'X' => 10, 
        'IX' => 9, 
        'V' => 5, 
        'IV' => 4, 
        'I' => 1);
    $result = '';
    while ($n > 0) {
        foreach ($map as $symbol => $value) {
            if($n >= $value) {
                $n -= $value;
                $result .= $symbol;
                break;
            }
        }
    }
    return $result;
}
