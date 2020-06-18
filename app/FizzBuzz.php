<?php

declare(strict_types=1);

namespace App;

class FizzBuzz
{
  public function runFizzBuzz()
  {
    for ($i = 1; $i <= 100; $i++) {
      if ($i % 3 === 0 && $i % 5 === 0) {
        echo "FizzBuzz\n";
      } elseif ($i % 3 === 0) {
        echo "Fizz\n";
      } elseif ($i % 5 === 0) {
        echo "Buzz\n";
      } else {
        echo "$i\n";
      }
    }
  }
}
