<?php

namespace Tests\Search;

use App\Search\DepthFirstFind;
use PHPUnit\Framework\TestCase;

class DepthFirstFindTest extends TestCase
{
    public function testSearch(): void
    {
        $search = new DepthFirstFind();

        $this->assertEquals(2, $search->search([1, 2, 3, 4, 5], 3));
        $this->assertEquals(-1, $search->search([1, 2, 3, 4, 5], 6));
    }

    public function testSearchRecursive(): void
    {
        $search = new DepthFirstFind();

        $this->assertEquals(2, $search->searchRecursive([1, 2, 3, 4, 5], 3));
        $this->assertEquals(-1, $search->searchRecursive([1, 2, 3, 4, 5], 6));
    }
}