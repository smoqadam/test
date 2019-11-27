<?php


namespace Christmas\Shape;


class Tree extends AbstractShape
{

    /**
     * @return array
     */
    public function generate(): array
    {
        $lines = $this->size;
        $output[] = $this->repeat('+', 1);
        $counter = 1;
        for ($i = 1; $i < $lines; $i++) {
            $output[] = $this->repeat($this->getChar(), $counter);
            $counter += 2;
        }

        return $output;
    }

}