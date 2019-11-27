<?php


namespace Christmas\Renderer;

use Christmas\Shape\AbstractShape;

interface InterfaceRenderer
{

    public function __construct(AbstractShape $shape);

    /**
     * Get a shape and return it as a string
     *
     * @return string
     */
    public function render(): string;

    /**
     * Return the line break character
     * @return string
     */
    public function getLineBreak(): string;

}