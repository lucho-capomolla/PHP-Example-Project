<?php


$password = "123456";

$hash = password_hash($password, PASSWORD_DEFAULT);

echo $hash;

$hash = '$2y$10$AiLREkiuIERtgiyvHu..GeXpRogcmTj9y./c9XzQ0rMiFXPzKBRnq';

var_dump(password_verify($password, $hash));
