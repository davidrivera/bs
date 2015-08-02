<?php
require 'human.php';

/**
 * This is a person
 */
class Person extends Human {
  /**
   * i don't know
   */
  use ezcReflectionReturnInfo;

  /**
   * Override thing
   */
  public function __construct(){
    echo "fjkdsfj";
  }
}
