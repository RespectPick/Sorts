<?php

/**
 * Пузырьковая сортировка
 * @param $array
 */
function bubble_sort(&$array)
{
    $n = 1;

    while ($n < count($array)){
        for($i = 0; $i < count($array) - 1; $i++){
            if($array[$i] > $array[$i + 1]){
                $tmp = $array[$i];
                $array[$i] = $array[$i + 1];
                $array[$i + 1] = $tmp;
            }
        }

        $n += 1;
    }
}

$array = [];
for($i = 0; $i < 10; $i++){
    $array[$i] = rand(-100, 100);
}

print_r($array);
bubble_sort($array);
print_r($array);

