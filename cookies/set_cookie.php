<?php

  //setcookie(NameOfTheCookie, Value, Expire time of the Cookie, Path);
  setcookie('example', 'hello', time() + 60 * 60 * 24 * 2);

  echo 'Cookie set.';

?>
