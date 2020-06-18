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
}
