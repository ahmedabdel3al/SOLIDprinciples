<?php
/**
 * Created by PhpStorm.
 * User: boly
 * Date: 30/03/2019
 * Time: 10:27 م
 */

namespace App\Model;


class AreaCalculation
{
    /**
     * @todo calculate area for shapes
     * @param $shapes
     * @return float|int
     */
    public function calculate($shapes)
    {
        foreach ($shapes as $shape) {
            $area [] = $shape->area();
        }
        return array_sum($area);
    }


    /**
     * (Justify why did you use one principle instead of the other) Your question
     * without open for extension and close for modifications at every model
     * this make this method unreadable and huge if this app had more shapes
     */
    public function calculateWithOutExtension($shapes)
    {
        foreach ($shapes as $shape) {
            if (is_a($shape, 'Circle')) {
                $area[] = $shape->radius * $shape->radius * pi();
            } elseif (is_a($shape, 'Square')) {
                $area[] = $shape->height * $shape->width;
            } else {
                $area = [];
            }
        }
        return array_sum($area);
    }
}