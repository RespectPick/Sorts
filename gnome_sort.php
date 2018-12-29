<?php

/**
 * Гномья сортировка
 * @param $array
 */
function gnome_sort(&$array)
{
    $i = 1;
    $j = 2;

    while ($i < count($array))
    {
        if($array[$i] > $array[$i - 1]){
            $i = $j;
            $j = $j + 1;
        }else{
            $tmp = $array[$i];
            $array[$i] = $array[$i - 1];
            $array[$i - 1] = $tmp;

            $i -= 1;
            if($i == 0){
                $i = $j;
                $j = $j + 1;
            }
        }
    }
}

$array = [];
for($i = 0; $i < 10; $i++){
    $array[$i] = rand(-100, 100);
}

print_r($array);
gnome_sort($array);
print_r($array);