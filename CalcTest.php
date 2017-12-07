<?php
use PHPUnit\Framework\TestCase;

require_once('Calc.php');

class CalcTest extends TestCase {

    public function setUp() {
        
        $this->calc = new Calc();
    }

    public function testSum() {

        $this->assertEquals(3, $this->calc->sum(1,2));
    }
}
