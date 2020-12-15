<?php
namespace App;
require 'vendor/autoload.php';

$magicClass = new MagicClass();
$magicClass->CreateSomething();
$magicClass->DoMagic();
$magicClass->MakeWonder();

$randomX1 = rand(0,100);
$randomY1= rand(0,100);
$randomX2 = rand(0,100);
$randomY2= rand(0,100);
$T1 = new Point($randomX1, $randomY1);
$V1 = new Vector($randomX2, $randomY2);
$V2 = new Vector(0,0);
$V3 = new Vector(1, -$V1->X/$V1->Y);
print_r($T1);
echo "<br>";
echo $V1->GetLength();
echo "<br>";
echo $V2->GetLength();
echo "<br>";
echo $V3->GetLength();
echo "<br>";
echo $V1->IsPerpendicular($V3);
echo "<br>";
$T1->MoveAlongX($V1->X-$T1->X);
$T1->MoveAlongY($V1->Y-$T1->Y);
print_r($T1);

