<?php
  $formData = $_POST;
  mail($formData['email'], $formData['title'], 'To jest wiadomość e-mail');

?>

<form method="POST">
  <input type="email" name="email" placeholder="E-mail" />
  <input type="text" name="title" placeholder="Title" />
  <input type="submit" value="Send me please" />
</form>
