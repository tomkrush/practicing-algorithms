<?php

namespace App\Search;

class DepthFirstFind {
    public function search(array $array, int $value): int
    {
        $left = 0;
        $right = count($array) - 1;

        while ($left <= $right) {
            $mid = (int)floor(($left + $right) / 2);

            if ($array[$mid] === $value) {
                return $mid;
            }

            if ($array[$mid] > $value) {
                $right = $mid - 1;
            } else {
                $left = $mid + 1;
            }
        }

        return -1;
    }

    public function searchRecursive(array $array, int $value): int
    {
        return $this->searchRecursiveInternal($array, $value, 0, count($array) - 1);
    }

    private function searchRecursiveInternal(array $array, int $value, int $left, int $right): int
    {
        if ($left > $right) {
            return -1;
        }

        $mid = (int)floor(($left + $right) / 2);

        if ($array[$mid] === $value) {
            return $mid;
        }

        if ($array[$mid] > $value) {
            return $this->searchRecursiveInternal($array, $value, $left, $mid - 1);
        }

        return $this->searchRecursiveInternal($array, $value, $mid + 1, $right);
    }
}