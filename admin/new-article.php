<?php

/*
Para evitar SQL Injection, se valida y sanitiza los valores de entrada que se insertarán en
la Base de Datos

Para evitar Scross Site Scripting, se puede utilizar la función htmlspecialchars($variable),
que evita que todos los caracteres especiales de HTML y JavaScript tengan efecto cuando se ejecuta.
Es decir, si se agregara dicho código, no se ejecutará, sino que se guardará como texto plano en la BD, evitando
que se ejecuté código malicioso.
*/

  require '../includes/init.php';

  Auth::requireLogin();

  require '../includes/db.php';

  $article = new Article();

  $categories = Category::getAll($conn);

  $category_ids = [];

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $article->title = $_POST['title'];
    $article->content = $_POST['content'];
    $article->published_at = $_POST['published_at'];

    $category_ids = $_POST['category'] ?? [];

    if ($article->create($conn)) {

      $article->setCategories($conn, $category_ids);

      Url::redirect("/admin/article.php?id={$article->id}");

    }
  }

?>

<?php require '../includes/header.php'; ?>

<fieldset>
  <legend><h2>New Article</h2></legend>

  <?php require 'includes/article-form.php'; ?>

</fieldset>

<?php require '../includes/footer.php'; ?>
