<?php

require 'Item.php';
require 'Book.php';

//Se muestran las constantes como si fuesen elementos o metodos estaticos
  //echo Item::MAX_LENGTH;

$my_item = new Item('TV', 'This is a TV.');

echo $my_item->getListingDescription();

echo "<br>";

$book = new Book('Hamlet', "It's the story of Hamlet...", 'Shakespeare');

echo $book->getListingDescription();
