<?php

namespace Human;
/**
 * This is a human package
 * this should be some summary
 *
 * @package Human
 */
class Human {

  /**
   * some constant doc
   */
  const SOME_CONSTANT = "FKDJSLF";

  /**
   * Some public var doc
   * @var String
   */
  public $some_public_var;

  /**
   * Some private var doc
   * @var Array
   */
  private $some_private_var;


  /**
   * This is something
   */
  public function __construct(){
    echo "hello";
  }

  /**
   * This says a thing
   * @param  String $thing
   */
  private function sayThing($thing)
  {
    echo "$thing"+"another HELLO";
  }

  /**
   * This returns a thing
   * @param  String $thing
   * @param String $another this is a definition
   * @return String the thing
   */
  public function returnThing($thing, $another)
  {
    return $thing;
  }
}
