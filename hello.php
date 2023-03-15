<?php
// Documentation: https://www.php.net/manual/es/langref.php
header('Content-Type: text/plain');

$message = "Hello";
// Print a variable or a message
echo "Hello, world!\n";

//var_dump()  -- DataType of the variable
var_dump($message);

$name = "Luciano!";
// Concatenation
echo $message . " " . $name . "\n";
// Variable Interpolation
echo "Hello Mr. $name";
// Another example
// echo "Hello Mr. {$name}";

echo "\n\n";

// Arrays (two ways of do an array)
$articles = array( "First post", "Another post", "Read this!" );
var_dump($articles);
echo "\n";

// Iterate the elements in an array
foreach ($articles as $index => $article) {
  echo $index . " - " . $article, ", ";
}
echo "\n\n\n";


$values = [
    "message" => "Hello world",
    "count" => 150,
    "pi" => 3.14,
    "status" => false,
    "result" => null
];
var_dump($values);
echo "\n\n";

// Multidimensional Arrays}
$alice = [
  "name" => "Alice",
  "email" => "alice@example.com",
  "height" => 1.80
];
$bob = [
  "name" => "Bob",
  "email" => "bob@example.com",
  "height" => 1.67
];
$carol = [
  "name" => "Carol",
  "email" => "carol@example.com",
  "height" => 1.74
];

$people = [$alice, $bob, $carol];
var_dump($people);
echo "\n";

// Accessing Multidimensional array elements
$alice_name = $people[0]["name"];
$alice_email = $people[0]["email"];
echo $alice_name . ". Email: " . $alice_email . "\n\n";


$articles_2 = [ ["title" => "First post", "content" => "This is the first post."],
 ["title" => "Another post", "content" => "Another post to read here."],
 ["title" => "Read this!", "content" => "You must read this article!"] ];

echo $articles_2[0]["title"];




?>
