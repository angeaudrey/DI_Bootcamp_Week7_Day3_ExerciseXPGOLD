<?php
#Script de connexion
  session_start();
// si le formulaire a été soumis
  $msg = '';
  if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Vérification des données de connexion
    if($username == 'audy' && $password == '012345') {
        $_SESSION['username'] = $username;
        $msg = 'username valide ';
    } else {
        $msg = 'Mot de passe ou nom username incorrect';
    }
  }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Formulaire</title>
    </head>
    <body>
        <form action="" method="post">
            <h2><?php echo $msg; ?></h2>
            <input type="text" name="username" placeholder="username" required />
            <input type="password" name="password" placeholder="password" required />
            <button type="submit" name="login">Login</button>
        </form>
  </body>
</html>

