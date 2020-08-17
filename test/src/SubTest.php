<?php
namespace Test;

use PHPUnit\Framework\TestCase;

class SubTest extends TestCase
{
  public function testCalculateArray_1_2(){
    $sub = new Sub([1,2]);
    $this->assertEquals($sub->calculate(), -1);
  }

  public function testCalculateArray_1_2_3_4(){
    $sub = new Sub([1,2,3,4]);
    $this->assertEquals($sub->calculate(), -8);
  }
}