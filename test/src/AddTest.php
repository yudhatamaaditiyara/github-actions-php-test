<?php
namespace Test;

use PHPUnit\Framework\TestCase;

class AddTest extends TestCase
{
  public function testCalculateArray_1_2(){
    $add = new Add([1,2]);
    $this->assertEquals($add->calculate(), 3);
  }

  public function testCalculateArray_1_2_3_4(){
    $add = new Add([1,2,3,4]);
    $this->assertEquals($add->calculate(), 10);
  }
}