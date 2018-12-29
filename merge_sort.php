<?php

function merge_sort(&$array)
{
    if(count($array) > 1)
    {
        $centerIndex = intdiv(count($array), 2);
        $leftPart = array_slice($array, 0, $centerIndex);
        $rightPart = array_slice($array, $centerIndex);

        merge_sort($leftPart);
        merge_sort($rightPart);

        $i = 0;
        $j = 0;
        $currentIndex = 0;

        while ($i < count($leftPart) && $j < count($rightPart))
        {
            if($leftPart[$i] < $rightPart[$j]){
                $array[$currentIndex] = $leftPart[$i];
                $i += 1;
            }else{
                $array[$currentIndex] = $rightPart[$j];
                $j += 1;
            }

            $currentIndex += 1;
        }

        while($i < count($leftPart)){
            $array[$currentIndex] = $leftPart[$i];
            $i += 1;
            $currentIndex += 1;
        }

        while($j < count($rightPart)){
            $array[$currentIndex] = $rightPart[$j];
            $j += 1;
            $currentIndex += 1;
        }
    }
}

$array = [];
for($i = 0; $i < 10; $i++){
    $array[$i] = rand(-100, 100);
}

print_r($array);
merge_sort($array);
print_r($array);