<?php

declare(strict_types=1);

use App\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
  public function test_fizzbuzz_is_instance_of_class()
  {
    $fizzbuzz = new FizzBuzz();
    $this->assertInstanceOf(FizzBuzz::class, $fizzbuzz);
  }

  public function test_show_buzz_when_input_equals_ten()
  {
    $fizzbuzz = new FizzBuzz();
    $this->assertEquals('Buzz', $fizzbuzz->runFizzBuzz(10));
  }
}
