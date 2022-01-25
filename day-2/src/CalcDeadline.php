<?php

function calcDeadline($manday, $calendar) {
    // số ngày cần nhỏ hơn số ngày trong lịch
    if ($manday > (count($calendar) - count(array_filter($calendar)))) {
        return false;
    }
    else if ($manday > 0) {
        if (!$calendar[0]) {
            $manday--;
        }
        array_splice($calendar,0,1);
        return calcDeadline($manday,$calendar)+1;
    }
}

