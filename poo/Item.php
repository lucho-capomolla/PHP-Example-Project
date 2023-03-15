<?php

class Item {

  // Constants are public and Static by default
  public const MAX_LENGTH = 24;

  private $name;
  private $description;
  public static $count = 0;

  function __construct($name, $description) {
    $this->name = $name;
    $this->description = $description;
    static::$count++;
  }

// Getters and Setters
  public function getName() {
    return $this->name;
  }

  public function setName($name) {
    $this->name = $name;
  }

  public function getDescription() {
    return $this->description;
  }

  public function setDescription($description) {
    $this->description = $description;
  }

  public static function showCount() {
    echo static::$count;
  }



  public function getListingDescription() {
    return $this->name;
  }
}
