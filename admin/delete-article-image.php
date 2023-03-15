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

      $previous_image = $article->image_file;

      if ($article->setImageFile($conn, null)) {

          if ($previous_image) {
            unlink("../uploads/$previous_image");
          }

          Url::redirect("/admin/edit-article-image.php?id={$article->id}");

      }

  }
?>


<?php require '../includes/header.php'; ?>

<fieldset>
  <legend><h2>Delete Article image</h2></legend>

  <?php if ($article->image_file): ?>
      <img src="/uploads/<?= $article->image_file; ?>"/>
  <?php endif; ?>

  <form method="post">
      <p>Are you sure?</p>

      <button type="submit">Delete</button>
      <a href="edit-article-image.php?id=<?= $article->id; ?>">Cancel</a>
  </form>

</fieldset>

<?php require '../includes/footer.php'; ?>
