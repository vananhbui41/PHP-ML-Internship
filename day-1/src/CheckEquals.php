<?php

function checkEquals($a, $b)
{
    // insert code here.
    // Không phải so sánh độ dài
    $array1=insertion_Sort($a);
    $array2=insertion_Sort($b);
    if ($array1 == $array2)
        return true;
    else
        return false;
    
}

function insertion_Sort($my_array)  
{  
    for($i=0; $i < count($my_array); $i++){  
        $val = $my_array[$i];  
        $j = $i-1;  
        while($j >= 0 && $my_array[$j] > $val){  
            $my_array[$j+1] = $my_array[$j];  
            $j--;  
        }  
        $my_array[$j+1] = $val;  
    }  
return $my_array;  
}  