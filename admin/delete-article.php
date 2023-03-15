<?php

  require '../includes/init.php';

  Auth::requireLogin();

  require '../includes/db.php';

// Validate the entry to avoid SQL injection
  if (isset($_GET['id'])) {

    $article = Article::getByID($conn, $_GET['id']);

    if (!$article) {
      die('Article not found.');
    }
  } else {
    die('Id not supplied, article not found.');
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

      if ($article->delete($conn)) {

        Url::redirect("/admin/");

      }
  }
?>

<?php require '../includes/header.php'; ?>

<h2>Delete article</h2>

<form method="post">
  <h3>Are you sure?</h3>

  <button type="submit">Delete</button>
  <a href="/article.php?id=<?= $article->id; ?>">Cancel</a>
</form>

<?php require '../includes/footer.php'; ?>
