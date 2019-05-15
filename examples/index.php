<html>
  <body>
    <?php include('./header.php'); ?>

    <?php
      $page = htmlspecialchars($_GET['page']);
      if ($page != '') {
        // TODO try to check if file exists
        $file = "./{$page}.php";
        include($file);
      } else {
        echo '<h1>Jesteś w pliku index.php</h1>';
      }
    ?>

    <?php include('./footer.php'); ?>
  </body>
</html>
