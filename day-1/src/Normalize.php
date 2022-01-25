<?php

function normalize($str)
{
    // insert code here.
    $string = trim($str);
    $string = preg_replace('/\s+/', ' ', $string);
    return $string;
}

