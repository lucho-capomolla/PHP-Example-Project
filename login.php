<?php

  require 'includes/init.php';

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    require 'includes/db.php';

    if (User::authenticate($conn, $_POST['username'], $_POST['password'])) {

      Auth::login();

      Url::redirect('/');

    } else {

      $error = "Username or Password are incorrect.";

    }
  }
?>

<?php require 'includes/header.php'; ?>

<h2>Login</h2>

<?php if (! empty($error)): ?>
  <p><?= $error ?></p>
<?php endif; ?>

<form method="post">

  <div class="form-group">
    <label for="username">Username</label>
    <input class="form-control" type="text" name="username" id="username">
  </div>

  <div class="form-group">
    <label for="password">Password</label>
    <input class="form-control" type="password" name="password" id="password">
  </div>
  <br />
  <button class="btn btn-outline-primary" type="submit">Log in</button>


</form>

<?php require 'includes/footer.php'; ?>
