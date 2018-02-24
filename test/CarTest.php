<?php
namespace Cruzer\Cruzer;

use Cruzer\Cruzer\Car;
use PHPUnit\Framework\TestCase;

class CarTest extends TestCase
{
    public function testBeep()
    {
        $car = new Car();
        $result = $car->beep();
        $this->assertEquals(true, $result);
    }
}
