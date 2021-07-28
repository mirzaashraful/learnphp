<?php
/*
 1. Create a Circle constructor that creates a circle with a radius provided by an argument.
The circles constructed must have two getters getArea() (PIr^2) and getPerimeter() (2PI*r)
which give both respective areas and perimeter (circumference).
Examples:
$circy = new Circle(11);
$->getArea();
// Should return 380.132711084365
$circy = new Circle(4.44);
$->getPerimeter();
// Should return 27.897342763877365

 */

namespace Pondit;


class Circle
{
    public float $radius = 0;

    //construct method
  public function __construct($radius)
  {
      $this->radius = $radius;
  }

    public function getArea()
    {
        return M_PI * $this->radius ** 2;
    }
    public function getPerimeter()
    {
        return 2*pi()*$this->radius;
    }

    function setRadius($radius) {
        $this->radius = $radius;
    }
}
$circy = new Circle(11);
echo $circy->getArea();
echo "<br>";
// Should return 380.132711084365
$circy2 = new Circle(4.44);
echo $circy2->getPerimeter();
// Should return 27.897342763877365