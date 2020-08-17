<?php
namespace Test;

class Sub extends AbstractTest
{
  /**
   * @return mixed
   */
  public function calculate(){
    return $this->reduce(function($value, $number){
      return $value - $number;
    });
  }
}