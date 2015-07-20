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
   * This is something
   */
  public function __construct(){
    echo "hello";
  }

  /**
   * This says a thing
   * @param  String $thing
   */
  public function sayThing($thing)
  {
    echo "$thing";
  }

  /**
   * This returns a thing
   * @param  String $thing
   * @return String the thing
   */
  public function returnThing($thing)
  {
    return $thing;
  }
}
