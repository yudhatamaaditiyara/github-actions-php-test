<?php
namespace Test;

use PHPUnit\Framework\TestCase;

class MulTest extends TestCase
{
  public function testCalculateArray_1_2(){
    $mul = new Mul([1,2]);
    $this->assertEquals($mul->calculate(), 2);
  }

  public function testCalculateArray_1_2_3_4(){
    $mul = new Mul([1,2,3,4]);
    $this->assertEquals($mul->calculate(), 24);
  }
}