<?php


namespace Christmas\Shape;


class ShapeFactory
{
    /**
     * Get Shape based on type and size
     *
     * @param string $type
     * @param string $size large|medium|small
     * @return AbstractShape
     */
    public static function make(string $type, string $size): AbstractShape
    {
        if ($type == 'star') {
            $shape = new Star(self::parseSize($size));
        } else {
            $shape = new Tree(self::parseSize($size));
        }

        return $shape;
    }

    /**
     * Parse the shape size based on the given string sizes large|medium|small
     *
     * @param string $size
     * @return int
     */
    private static function parseSize(?string $size): int
    {
        switch ($size) {
            case 'large':
                $shapeSize = AbstractShape::SIZE_LARGE;
                break;
            case 'medium':
                $shapeSize = AbstractShape::SIZE_MEDIUM;
                break;
            case 'small':
            default:
                $shapeSize = AbstractShape::SIZE_SMALL;
                break;
        }

        return $shapeSize;
    }
}