<html>
  <body>
    <?php include('./header.php'); ?>

    <?php
      $page = htmlspecialchars($_GET['page']);
      if ($page != '') {
        include("./{$page}.php");
      } else {
        echo '<h1>Jesteś w pliku index.php</h1>';
      }
    ?>

    <?php include('./footer.php'); ?>
  </body>
</html>
