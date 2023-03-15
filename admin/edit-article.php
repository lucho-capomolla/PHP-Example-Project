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

$categories = Category::getAll($conn);

$category_ids = array_column($article->getCategories($conn), 'id');


  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $article->title = $_POST['title'];
    $article->content = $_POST['content'];
    $article->published_at = $_POST['published_at'];

    $category_ids = $_POST['category'] ?? [];

    if ($article->update($conn)) {

      $article->setCategories($conn, $category_ids);

      Url::redirect("/admin/article.php?id={$article->id}");

    }
  }
?>


<?php require '../includes/header.php'; ?>

<fieldset>
  <legend><h2>Edit Article</h2></legend>

  <?php require 'includes/article-form.php'; ?>

</fieldset>

<?php require '../includes/footer.php'; ?>
