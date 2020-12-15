<?php


namespace App;


class Vector
{
    public $X;
    public $Y;

    function __construct($x, $y){
        $this->X = $x;
        $this->Y = $y;
    }

    function GetLength(){
        return sqrt($this->X*$this->X+$this->Y*$this->Y);
    }

    function IsZeroVector(){
        return $this->X==0 and $this->Y==0;
    }

    function IsPerpendicular(Vector $vector){
        return $this->X*$vector->X + $this->Y*$vector->Y == 0;
    }

}