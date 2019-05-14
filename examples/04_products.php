<?php
  // $products = array('Jajka', 'Mleko', 'Kawa', 'Herbata');
  $products = ['Jajka', 'Mleko', 'Kawa', 'Herbata'];
  $coffee = $products[2];

  // for ($i = 0; $i < 4; $i++) {
  //   echo $products[$i];
  // }

  // foreach ($products as $p) {
  //   echo $p;
  // }
?>


<h1>Products</h1>
<ul>
  <?php
    foreach ($products as $p) {
      echo "<li>$p</li>";
    }
  ?>

  <?php foreach ($products as $p): ?>
    <li><?= $p ?></li>
  <?php endforeach; ?>

</ul>
