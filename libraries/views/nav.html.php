<?php

require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/config/session.php';

?>

<nav>
  <div>
    <a href="<?= URLROOT . "/" ?>">
      <img id="logo" src="<?= URLROOT . "/assets/img/white-logo.png" ?>" alt="logo" />
    </a>
  </div>
  <?php
  if (empty($_SESSION)) :
  ?>
    <ul>
      <li id="login">
        <a href="<?= URLROOT . "/admin.php" ?>">
          <i class="fas fa-sign-in-alt"></i>
        </a>
      </li>
    </ul>
  <?php
  endif;
  if (isset($_SESSION['email'])) :
  ?>
    <input type="checkbox" id="toggle">
    <ul class="hamburger">
      <span></span>
      <span></span>
      <span></span>
    </ul>
    <ul class="hamburger-menu">
      <a href=""><li>Ajouter un vin</li></a>
      <a href=""><li>Modifier un vin</li></a>
      <a href="?logout"><li>Déconnexion</li></a>
    </ul>

  <?php
  endif;
  ?>

</nav>