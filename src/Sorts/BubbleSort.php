<?php

namespace App\Sorts;

class BubbleSort
{
    public function sort($array)
    {
        $count = count($array);

        for ($i = 0; $i < $count; $i++) {
            for ($j = 0; $j < $count - $i - 1; $j++) {
                if ($array[$j] > $array[$j + 1]) {
                    $temp = $array[$j + 1];
                    $array[$j + 1] = $array[$j];
                    $array[$j] = $temp;
                }
            }
        }

        return $array;
    }
}