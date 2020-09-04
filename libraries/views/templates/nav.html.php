<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/php-my-cave/libraries/config/config.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/php-my-cave/libraries/config/session.php');

?>

<nav>
  <div>
    <img id="logo" src="<?= URLROOT . "/assets/img/white-logo.png" ?>" alt="logo" />
  </div>
  <ul>
    <?php
    if (empty($_SESSION)) :
    ?>
      <li id="login">
        <i class="fas fa-sign-in-alt"></i>
      </li>
    <?php
    elseif (isset($_SESSION['email'])) :
    ?>
      <li>
        <span></span>
        <span></span>
        <span></span>
      </li>
    <?php
    endif;
    ?>
  </ul>
</nav>