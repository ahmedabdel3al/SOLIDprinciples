<?php
/**
 * Created by AhmedAbdelAal.
 * User: boly
 * Date: 30/03/2019
 * Time: 10:06 م
 */

namespace App\Model;


use App\Helper\Shape;

class Circle implements Shape
{
    public $radius;

    /**
     * Circle constructor.
     * @param $radius
     */
    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    /**
     * @todo calculate area
     * @return float|int
     */
    public function area()
    {
        return $this->radius * $this->radius * pi();
    }
}