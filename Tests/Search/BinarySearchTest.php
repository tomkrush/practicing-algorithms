<?php

namespace Tests\Search;

use App\Search\BinarySearch;
use PHPUnit\Framework\TestCase;

class BinarySearchTest extends TestCase
{
    public function testSearch(): void
    {
        $search = new BinarySearch();

        $this->assertEquals(2, $search->search([1, 2, 3, 4, 5], 3));
        $this->assertEquals(-1, $search->search([1, 2, 3, 4, 5], 6));
    }

    public function testSearchRecursive(): void
    {
        $search = new BinarySearch();

        $this->assertEquals(2, $search->searchRecursive([1, 2, 3, 4, 5], 3));
        $this->assertEquals(-1, $search->searchRecursive([1, 2, 3, 4, 5], 6));
    }
}