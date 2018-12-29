<?php

/**
 * Быстрая сортировка
 * @param $array
 * @param $first int начальный индекс
 * @param $last int конечный индекс
 */
function quick_sort(&$array, $first, $last)
{
    if($first >= $last){
        return;
    }

    $pivot = $array[rand($first, $last)];

    $i = $first;
    $j = $last;

    while($i <= $j)
    {
        while($array[$i] < $pivot)
        {
            $i+=1;
        }

        while($array[$j] > $pivot)
        {
            $j -= 1;
        }

        if($i <= $j){
            $tmp = $array[$i];
            $array[$i] = $array[$j];
            $array[$j] = $tmp;

            $i = $i + 1;
            $j = $j - 1;
        }
    }

    quick_sort($array, $first, $j);
    quick_sort($array, $i, $last);
}

$array = [];
for($i = 0; $i < 20; $i++){
    $array[$i] = rand(-100, 100);
}

print_r($array);
quick_sort($array, 0, count($array) - 1);
print_r($array);