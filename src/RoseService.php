<?php


namespace Rockyang\Rose;


class RoseService
{

    private $my_color = "";

    public function __construct($my_color)
    {
        $this->my_color = $my_color;
    }

    public function desc()
    {
        echo "this is Rose Flower, " . "my_flower is " . $this->my_color . PHP_EOL;
    }

}