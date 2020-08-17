<?php
namespace Test;

use PHPUnit\Framework\TestCase;

class DivTest extends TestCase
{
  public function testCalculateArray_1_2(){
    $div = new Div([1,2]);
    $this->assertEquals($div->calculate(), 0.5);
  }

  public function testCalculateArray_1_2_3_4(){
    $div = new Div([1,2,3,4]);
    $this->assertEquals(~~$div->calculate(), 0);
  }
}