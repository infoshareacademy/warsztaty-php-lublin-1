<?php

$name = 'Ala';

if (isset($_GET['newname'])) {
  $name = htmlspecialchars($_GET['newname']);
}

?>

<html>
  <body>
    <?php include('./header.php'); ?>
    <h1>Hello, <?= $name ?></h1>
    <?php include('./footer.php'); ?>
  </body>
</html>
