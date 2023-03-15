<?php


class Book extends Item {

  public $author;

  function __construct($name, $description, $author){
    $this->name = $name;
    $this->description = $description;
    $this->author = $author;
  }

  public function getListingDescription() {
    return parent::getListingDescription() . " by " . $this->author;
  }

}
