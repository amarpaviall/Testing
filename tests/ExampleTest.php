<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
   public  function testThatTwoStringAreEquals()
   {
      $string1 = "check1";
      $string2 = "check1";

      $this->assertSame($string1, $string2);
   }
}