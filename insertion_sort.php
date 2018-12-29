<?php

/**
 * Сортировка вставками
 * @param $array
 */
function insertion_sort(&$array)
{
    for($i = 1; $i < count($array); $i++){
        $tmp = $array[$i];
        $j = $i;

        while(($array[$j - 1] > $tmp) && ($j > 0)){
            $array[$j] = $array[$j - 1];
            $j -= 1;
        }

        $array[$j] = $tmp;
    }
}

$array = [];
for($i = 0; $i < 10; $i++){
    $array[$i] = rand(-100, 100);
}

print_r($array);
insertion_sort($array);
print_r($array);