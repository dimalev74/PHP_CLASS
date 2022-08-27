<?php



class Sphere extends GeometryFigure
{
    protected $radius = 0;
    public function __construct(){
        $this->name = 'Сфера';
        $this->radius = rand(1,20);
    }

    public function getArea(): float{
        return 3.14 * pow($this->radius,2);
    }

    public function getPerimeter(): float{
        return 2*3.14*$this->radius;
    }

    public function getParam(){
        return $this->radius;
    }

}