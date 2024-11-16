<?php
function write_logo()
{
    return '<img src="img/logo.png" alt="Logo">';
}

function write_copyright_notice()
{
    $year = date('Y');
    $message = '&copy; ' . $year . ' - The Candy Store';
    return $message;
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Basic Functions</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <header>
      <h1><?= write_logo() ?> The Candy Store</h1>
    </header>
    <article>
      <h2>Welcome to the Candy Store</h2>
    </article>
    <footer>
      <?= write_logo() ?>
      <?= write_copyright_notice() ?>
    </footer>
  </body>
</html>
