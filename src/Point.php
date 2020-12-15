<?php


namespace App;


class Point
{
    public $X;
    public $Y;

    function __construct($x, $y){
        $this->X = $x;
        $this->Y = $y;
    }

    function MoveAlongX($distance){
        $this->X+=$distance;
    }

    function MoveAlongY($distance){
        $this->Y+=$distance;
    }
}