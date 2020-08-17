<?php
namespace Test;

abstract class AbstractTest
{
  /**
   * @var array
   */
  protected $numbers;

  /**
   * @param array $numbers
   */
  public function __construct(array $numbers){
    $this->numbers = $numbers;
  }

  /**
   * @param callable $callback
   * @return mixed
   */
  protected function reduce(callable $callback){
    $value = null;
    $length = count($this->numbers);
    if ($length > 0) {
      $i = 0;
      $value = $this->numbers[$i++];
      for (; $i < $length; ++$i) {
        $value = $callback($value, $this->numbers[$i]);
      }
    }
    return $value;
  }
}