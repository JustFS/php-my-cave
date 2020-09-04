<?php

/**
 * Fournit token de connexion et déconnecte l'utilisateur
 */

require_once 'config.php';

session_start();

// if (empty($_SESSION) && $page == 'Annonces' || empty($_SESSION) && $page == 'Annonce') {
// 	header('Location: login.php');
// 	exit;
// }
if (isset($_GET['logout'])) {
	session_destroy();
	header('Location:' . URLROOT . '/index.php');
}

?>