<?php

namespace Tests;

use App\BubbleSort;
use PHPUnit\Framework\TestCase;

class BubbleSortTest extends TestCase {
    public function testSort() {
        $sorter = new BubbleSort();

        $array = [5, 3, 7, 1, 9, 2, 4, 6, 8];

        $this->assertEquals([1, 2, 3, 4, 5, 6, 7, 8, 9], $sorter->sort($array));
    }

    public function testSortWithOneElement() {
        $sorter = new BubbleSort();

        $array = [5];

        $this->assertEquals([5], $sorter->sort($array));
    }

    public function testSortWithTwoElements() {
        $sorter = new BubbleSort();

        $array = [5, 3];

        $this->assertEquals([3, 5], $sorter->sort($array));
    }

    public function testSortWithThreeElements() {
        $sorter = new BubbleSort();

        $array = [5, 3, 7];

        $this->assertEquals([3, 5, 7], $sorter->sort($array));
    }

    public function testSortWithEmptyArray() {
        $sorter = new BubbleSort();

        $array = [];

        $this->assertEquals([], $sorter->sort($array));
    }
}