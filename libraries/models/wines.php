<?php

namespace models;

require_once 'Model.php';

class Wines extends Model
{
  public function list($limit)
  {
    $sql = $this->pdo->query("
      SELECT * 
      FROM wines 
      ORDER BY publish_date 
      DESC
      $limit
    ");
    $sql->setFetchMode(\PDO::FETCH_ASSOC);
    
    return $sql;
  }

  public function create()
  {
    $sth = $this->pdo->prepare("
      INSERT INTO wines (name, year, grapes, country, region, description, picture, author) 
      VALUES (:name,:year, :grapes, :country, :region,:description, :picture, :author)
    ");
    
    return $sth;
  }
}