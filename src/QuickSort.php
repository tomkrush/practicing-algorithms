<?php

namespace App;

class QuickSort
{
    public function sort($array)
    {
        if (count($array) < 2) {
            return $array;
        }

        $pivot = $array[0];
        $less = [];
        $greater = [];

        for ($i = 1; $i < count($array); $i++) {
            if ($array[$i] <= $pivot) {
                $less[] = $array[$i];
            } else {
                $greater[] = $array[$i];
            }
        }

        return array_merge($this->sort($less), [$pivot], $this->sort($greater));
    }
}