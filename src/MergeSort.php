<?php

namespace App;

class MergeSort {
    public function sort($array) {
        if (count($array) < 2) {
            return $array;
        }

        $middle = floor(count($array) / 2);
        $left = array_slice($array, 0, $middle);
        $right = array_slice($array, $middle);

        return $this->merge($this->sort($left), $this->sort($right));
    }

    private function merge($left, $right) {
        $result = [];

        while (count($left) > 0 && count($right) > 0) {
            if ($left[0] <= $right[0]) {
                $result[] = array_shift($left);
            } else {
                $result[] = array_shift($right);
            }
        }

        while (count($left) > 0) {
            $result[] = array_shift($left);
        }

        while (count($right) > 0) {
            $result[] = array_shift($right);
        }

        return $result;
    }
}