<?php

/**
 * Шейкерная сортировка
 * @param $array
 */
function shaker_sort(&$array)
{
    $length = count($array);
    $leftIndex = 1;
    $lastChangeIndex = $rightIndex = $length - 1;

    while($leftIndex < $rightIndex)
    {
        for($i = $rightIndex; $i > $leftIndex - 1; $i--){
            if($array[$i - 1] > $array[$i]){
                $tmp = $array[$i];
                $array[$i] = $array[$i - 1];
                $array[$i - 1] = $tmp;
                $lastChangeIndex = $i;
            }
        }

        $leftIndex = $lastChangeIndex;

        for($i = $leftIndex; $i < $rightIndex + 1; $i++){
            if($array[$i - 1] > $array[$i]){
                $tmp = $array[$i];
                $array[$i] = $array[$i - 1];
                $array[$i - 1] = $tmp;
                $lastChangeIndex = $i;
            }
        }

        $rightIndex = $lastChangeIndex;
    }
}

$array = [];
for($i = 0; $i < 10; $i++){
    $array[$i] = rand(-100, 100);
}

print_r($array);
shaker_sort($array);
print_r($array);

