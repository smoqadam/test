<?php


namespace Christmas\Shape;


class Star extends AbstractShape
{

    /**
     * @return array
     */
    public function generate(): array
    {
        $lines = $this->size;
        // first line has a +
        $output[] = $this->repeat('+', 1);
        $output[] = $this->repeat($this->getChar(), 1);
        $counter = 3;
        $extraChar = '';
        // print first half of star
        for ($i = 1; $i < $lines / 2; $i++) {
            if ($i+1 >= $lines / 2) {
                $extraChar = '+';
            }
            $output[] = $this->repeat($this->getChar(), $counter, $extraChar);
            $counter += 4;
        }

        // print the second half of star
        $counter -= 4;
        for ($i = $lines; $i > 0; $i--) {
            $counter -= 4;
            if ($counter <= 0) break;
            $output[] = $this->repeat($this->getChar(), $counter);
        }
        $output[] = $this->repeat($this->getChar(), 1);
        $output[] = $this->repeat('+', 1);

        return $output;
    }

} 