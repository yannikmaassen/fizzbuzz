<?php

declare(strict_types=1);

namespace App;

class FizzBuzz
{
  public function runFizzBuzz($number)
  {
    $range = range(1, 100, 1);

    foreach ($range as $number) {
      if ($number % 3 === 0 && $number % 5 === 0) {
        echo "FizzBuzz\n";
      } elseif ($number % 3 === 0) {
        echo "Fizz\n";
      } elseif ($number % 5 === 0) {
        echo "Buzz\n";
      } else {
        echo "$number\n";
      }
    }
  }
}
