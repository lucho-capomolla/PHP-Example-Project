<?php

  require '../includes/init.php';

  Auth::requireLogin();

  require '../includes/db.php';

  $article = Article::getById($conn, $_POST['id']);

  $published_at = $article->publish($conn);

?>

<time><?= $published_at ?></time>
