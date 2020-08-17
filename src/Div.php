<?php
namespace Test;

class Div extends AbstractTest
{
  /**
   * @return mixed
   */
  public function calculate(){
    return $this->reduce(function($value, $number){
      return $value / $number;
    });
  }
}