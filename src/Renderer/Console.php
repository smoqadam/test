<?php


namespace Christmas\Renderer;

use Christmas\Shape\AbstractShape;

class Console implements InterfaceRenderer
{
    private $shape;
    /**
     * @var string
     */
    protected $lineBreak = PHP_EOL;

    public function __construct(AbstractShape $shape)
    {
        $this->shape = $shape;
    }

    /**
     * @inheritDoc
     */
    public function render(): string
    {
        return implode($this->getLineBreak(), $this->shape->generate());
    }

    /**
     * @inheritDoc
     */
    public function getLineBreak(): string
    {
        return $this->lineBreak;
    }
}