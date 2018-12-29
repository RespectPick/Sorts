<?php

/**
 * Сортировка выбором
 * @param $array
 */
function selection_sort(&$array)
{
    for($i = 0; $i < count($array); $i++){
        $minIndex = $i;

        for($j = $i + 1; $j < count($array); $j++){
            if($array[$j] < $array[$minIndex]){
                $minIndex = $j;
            }
        }

        $tmp = $array[$minIndex];
        $array[$minIndex] = $array[$i];
        $array[$i] = $tmp;
    }
}

$array = [];
for($i = 0; $i < 10; $i++){
    $array[$i] = rand(-100, 100);
}

print_r($array);
selection_sort($array);
print_r($array);