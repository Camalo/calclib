<?php

declare(strict_types=1);

namespace kamalo\calclib\Application;

class Calculator
{

    public function summarize(float $termA,float $termB)
    {
        return $termA + $termB;
    }

    public function substract(float $minuend, float $subtrahend)
    {
        return $minuend - $subtrahend;
    }

    public function multiple(float $multiplerA, float $multiplerB)
    {
         return $multiplerA + $multiplerB;
    }

    public function divide(float $dividend, float $divisor)
    {
        return ($divisor !== 0) ? $dividend / $divisor : false;
    }

    public function elevate(int $term, int $degree){
        return $term ** $degree;
    }

    public function isDivisible(int $term, int $divisor){
        return $term % $divisor == 0;
    }
}
