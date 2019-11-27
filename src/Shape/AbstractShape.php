<?php


namespace Christmas\Shape;


abstract class AbstractShape
{

    const SIZE_SMALL = 5;
    const SIZE_MEDIUM = 7;
    const SIZE_LARGE = 11;

    /**
     * For having some left margin, we should set this const greater than maximum shape's column
     */
    const COLUMNS = 30;

    /**
     * Line height
     *
     * @var int $size
     */
    protected $size;

    /**
     * @var string
     */
    protected $char = 'x';

    /**
     * Generate the shape
     *
     * @return AbstractShape
     */
    public abstract function generate(): array;


    /**
     * Star constructor.
     * @param int $size
     */
    public function __construct(int $size)
    {
        $this->size = $size;
    }


    /**
     * repeat the given character and put the space around it
     *
     * @param string $character Character to repeat
     * @param int $count Number of time the string should be repeated
     * @param string|null $extraChar
     * @return string
     */
    protected function repeat(string $character, int $count, ?string $extraChar = null): string
    {
        $characters = str_repeat($character, $count);
        $characters = $extraChar . $characters . $extraChar;
        $count = strlen($characters);
        $spaceCount = $this->getSpaceCount($count);
        $spaces = str_repeat(' ', $spaceCount);
        return $spaces . $characters . $spaces;
    }

    /**
     * calculate number of spaces around the characters in every line
     *
     * @param int $count
     * @return int
     */
    protected function getSpaceCount(int $count): int
    {
        return intval(floor((self::COLUMNS - $count) / 2));
    }

    /**
     * @return string
     */
    public function getChar(): string
    {
        return $this->char;
    }
}