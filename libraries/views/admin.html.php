<?php
require_once(dirname(__DIR__) . '/config/session.php');
?>

<div class="admin-container">
  <h1>Page Admin</h1>
    <?php
    if (empty($_SESSION)) :
    ?>
    <div class="login-container">
      <h2>Se connecter</h2>

      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div>
          <label>Email</label>
          <input type="text" name="email" placeholder="Entrez votre mail" />
        </div>
        <div>
          <label>Password</label>
          <input type="password" name="password" placeholder="Entrez votre mot de passe" />
        </div>
        <button type="submit" name="submit-login">Connexion</button>
      </form>
    </div>
    <?php
    elseif (isset($_SESSION['email'])):
    ?>
    <h2>Ajouter</h2>
    <h2>Modifier</h2>
    <h2>suppimer</h2>

    <?php
    endif;
    ?>
</div>