<?php


namespace Christmas\Renderer;

use Christmas\Shape\AbstractShape;

/**
 * Class Web
 * @package Christmas\Renderer
 */
class Web implements InterfaceRenderer
{
    protected $lineBreak = '<br>';
    /**
     * @var AbstractShape
     */
    private $shape;


    public function __construct(AbstractShape $shape)
    {
        $this->shape = $shape;
    }

    /**
     * @inheritDoc
     */
    public function render(): string
    {
        $shape = implode($this->getLineBreak(), $this->shape->generate());
        return $this->normalize($shape);
    }


    /**
     * @inheritDoc
     */
    public function getLineBreak(): string
    {
        return $this->lineBreak;
    }

    /**
     * Colorize and render shape
     *
     * @return string
     */
    public function renderColorize(): string
    {
        $output = $this->shape->generate();
        $colorizedOutput = [];
        foreach ($output as $line) {
            $line = $this->normalize($line);
            $colorizedOutput[] = '<span style="color:' . $this->getRandomColor() . '">' . $line . '</span>';
        }

        return implode($this->getLineBreak(), $colorizedOutput);
    }

    /**
     * Generate random HEX color
     * Stolen from: https://stackoverflow.com/a/5614583/1103397
     *
     * @return string
     */
    private function getRandomColor(): string
    {
        $color = '#';
        for ($i = 0; $i < 3; $i++) {
            $color .= str_pad(dechex(mt_rand(0, 255)), 2, '0', STR_PAD_LEFT);
        }

        return $color;
    }

    /**
     * Replace spaces with &nbsp;
     * @param string $input
     * @return string
     */
    public function normalize(string $input): string
    {
        return str_replace(' ', '&nbsp;', $input);
    }
}