<?php
namespace Test;

class Add extends AbstractTest
{
  /**
   * @return mixed
   */
  public function calculate(){
    return $this->reduce(function($value, $number){
      return $value + $number;
    });
  }
}