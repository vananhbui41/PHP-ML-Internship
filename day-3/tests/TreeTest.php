<?php

require(__DIR__ . '/../src/tree.php');

use PHPUnit\Framework\TestCase;

class TreeTest extends TestCase
{
    public function testSampleExample(): void
    {
        $directNodes = [
            ['id' => 1, 'name' => "Node A",  'parent_id' => 0],
            ['id' => 2, 'name' => "Node B",  'parent_id' => 0],
            ['id' => 3, 'name' => "Node A1", 'parent_id' => 1],
            ['id' => 4, 'name' => "Node A2", 'parent_id' => 1],
        ];

        $tree = new Tree();
        $tree->init($directNodes);

        // Test node 1;
        $this->assertIsArray($tree->getNode(1));
        $this->assertEmpty(array_diff($directNodes[0], $tree->getNode(1)));

        // Test compare all node of node 1
        $this->assertCount(3, $tree->getNodes(1));
        $this->assertContains($tree->getNode(1), $tree->getNodes(1));
        $this->assertContains($tree->getNode(3), $tree->getNodes(1));
        $this->assertContains($tree->getNode(4), $tree->getNodes(1));

        // Test node 2;
        $this->assertIsArray($tree->getNode(2));
        $this->assertEmpty(array_diff($directNodes[1], $tree->getNode(2)));

        // ToString Root
        $stringExpected = "<ul><li>Node A<ul><li>Node A1</li><li>Node A2</li></ul></li><li>Node B</li></ul>";
        $this->assertSame($stringExpected, $tree->toString());
    }
}