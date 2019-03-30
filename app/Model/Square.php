<?php
/**
 * Created by AhmedAbdelAal.
 * User: boly
 * Date: 30/03/2019
 * Time: 10:06 م
 */

namespace App\Model;


use App\Helper\Shape;

class Square implements Shape
{
    public $width;


    /**
     * Circle constructor.
     * @param $width
     * @param $height
     */
    public function __construct($width)
    {
        $this->width = $width;

    }

    /**
     * @todo calculate area
     * @return float|int
     */
    public function area()
    {
        return $this->width * $this->width;
    }
}