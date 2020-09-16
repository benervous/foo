<?php

/**
 *
 */
class Foo
{
  var $foo_argument;

  function __construct($foo_argument)
  {
   $this->foo_argument = $foo_argument;
  }

  function Foo(){
    global $foo_argument;
   echo "Foo is similar to $foo_argument";
 }
}

$foo = new Foo("foo");
$foo->Foo();





 ?>
