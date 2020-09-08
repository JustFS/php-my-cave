<?php
require_once(dirname(__DIR__) . '/autoload.php');
?>

<div class="update-container">
  <h1>Modifier</h1>
  <div class="update-search">
    <input type="search" placeholder="rechercher">
    <select name="wines" id="wines">
      <option value="2020">2020</option>
      <option value="2019">2019</option>
      <option value="2018">2018</option>
      <option value="2017">2017</option>
      <option value="2016">2016</option>
      <option value="2015">2015</option>
      <option value="2014">2014</option>
      <option value="2013">2013</option>
      <option value="2012">2012</option>
      <option value="2011">2011</option>
      <option value="2010">2010</option>
    </select>
  </div>
  <div class="update-list">
    <div class="header">
      <h3>Nom</h3>
      <p>Année</p>
    </div>
    <?php

    $model = new \models\Wines();
    $sql = $model->list('');

    while ($wine = $sql->fetch()) {
    ?>
      <div class="wine">
        <h2><?= $wine['name'] ?></h2>
        <h4><?= $wine['year'] ?></h4>
        <!-- Update reveal onclick -->
        <a href="admin.php?id=lol"><i class="fas fa-pen"></i></a>
        <input class="update-checkbox" type="checkbox">
        <div class="update">
          <form action="*****.php" method="post" enctype="multipart/form-data">
            <label for="">Nom</label>
            <input type="text" name="name" placeholder="<?= $wine['name'] ?>">
            <br>
            <label for="">Millésime</label>
            <select name="year">
              <?= $wine['year'] ?>
              <option value="2020" <?php echo $wine["year"] == 2020 ? "selected" : '' ?>>2020</option>
              <option value="2019" <?php echo $wine["year"] == 2019 ? "selected" : '' ?>>2019</option>
              <option value="2018" <?php echo $wine["year"] == 2018 ? "selected" : '' ?>>2018</option>
              <option value="2017" <?php echo $wine["year"] == 2017 ? "selected" : '' ?>>2017</option>
              <option value="2016" <?php echo $wine["year"] == 2016 ? "selected" : '' ?>>2016</option>
              <option value="2015" <?php echo $wine["year"] == 2015 ? "selected" : '' ?>>2015</option>
              <option value="2014" <?php echo $wine["year"] == 2014 ? "selected" : '' ?>>2014</option>
              <option value="2013" <?php echo $wine["year"] == 2013 ? "selected" : '' ?>>2013</option>
              <option value="2012" <?php echo $wine["year"] == 2012 ? "selected" : '' ?>>2012</option>
              <option value="2011" <?php echo $wine["year"] == 2011 ? "selected" : '' ?>>2011</option>
              <option value="2010" <?php echo $wine["year"] == 2010 ? "selected" : '' ?>>2010</option>
              <option value="2009" <?php echo $wine["year"] == 2009 ? "selected" : '' ?>>2009</option>
              <option value="2008" <?php echo $wine["year"] == 2008 ? "selected" : '' ?>>2008</option>
              <option value="2007" <?php echo $wine["year"] == 2007 ? "selected" : '' ?>>2007</option>
            </select>

            <br>
            <label for="">Cépage</label>
            <input type="text" name="grapes" placeholder="<?= $wine['grapes'] ?>"><br>

            <label for="">Pays</label>
            <input type="text" name="country" placeholder="<?= $wine['country'] ?>"><br>

            <label for="">Région</label>
            <input type="text" name="region" placeholder="<?= $wine['region'] ?>"><br>

            <label for="">Description</label>
            <textarea name="description" placeholder="<?= $wine['description'] ?>" cols="30" rows="10"></textarea><br>

            <input type="file" name="picture"><br>

            <input type="submit" value="Envoyer">
          </form>
        </div>
        <i class="fas fa-trash-alt"></i>
      </div>
    <?php
    };
    ?>
  </div>