<?php


use Christmas\Shape\AbstractShape;
use Christmas\Shape\Tree;
use PHPUnit\Framework\TestCase;

class TreeTest extends TestCase
{
    public $size = 11;
    public $shapeObject;
    public $shape;

    protected function setUp(): void
    {
        $this->shapeObject = new Tree($this->size);
        $this->shape = $this->shapeObject->generate();
    }

    public function testGenerateReturnAbstractShape()
    {
        $this->assertInstanceOf(AbstractShape::class, $this->shapeObject);
    }

    public function testOutputIsArray()
    {
        $this->assertIsArray($this->shape);
    }
}
