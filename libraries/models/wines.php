<?php

namespace models;

require_once 'Model.php';

class Wines extends Model
{

public function list()
  {
    $sql = $this->pdo->query("
      SELECT * 
      FROM wines 
      ORDER BY publish_date 
      DESC
    ");
    $sql->setFetchMode(\PDO::FETCH_ASSOC);
    
    return $sql;
  }
}