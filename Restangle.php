<?php



class Restangle extends GeometryFigure
{
    public function __construct(){
        $this->name = 'Прямоугольник';
        $this->a=rand(1,20);
        $this->b=rand(1,20);
        $this->c=rand(1,20);
        $this->d=rand(1,20);
    }

    public function getArea(): float {
        return $this->a * $this->b;
    }

    public function getPerimeter(): float {
        return $this->a + $this->b + $this->c + $this->d;
    }

    public function getParam(){
        return $this->a . ' ' . $this->b . ' ' . $this->c . ' ' . $this->d;
    }

}