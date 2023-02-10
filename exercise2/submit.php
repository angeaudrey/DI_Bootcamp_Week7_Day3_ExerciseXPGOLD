<?php
  session_start();

  if (isset($_POST['name'])) {
        $_SESSION['name'] = $_POST['name'];
        echo 'Welcome, ' . $_SESSION['name'] . '!';
  } else {
        echo 'Désolé, nous ne vous reconnaissons pas. Veuillez vous <a href="login.html">Connecter</a> encore.';
  }
?>