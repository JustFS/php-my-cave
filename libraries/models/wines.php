<?php

require_once 'Model.php';

class Annonces extends Model
{

public function list()
  {
    $sql = $this->pdo->query("SELECT * FROM annonces a WHERE $this->idSession != author_article AND a.active != 0 ORDER BY publish_date DESC");
    $sql->setFetchMode(PDO::FETCH_ASSOC);
    
    return $sql;
  }
}