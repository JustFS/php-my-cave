<?php

require_once '../config/database.php';
require_once '../config/session.php';

abstract class Model
{
  protected $pdo;

  public function __construct()
  {
    $this->pdo = getPdo();
    
    if (!empty($_SESSION['id'])) {
      $this->idSession = htmlspecialchars($_SESSION['id']);
    }
  }
}
