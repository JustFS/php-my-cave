<div class="lobby-container">
  <ul>
    <li><i class="fas fa-search"></i></li>
    <li><i class="fas fa-globe-europe"></i></li>
    <li><i class="fas fa-wine-glass-alt"></i></li>
  </ul>
  <h2>Liste des vins</h2>

  <?php

  $model = new \models\Wines();
  $sql = $model->list('');

  while ($wine = $sql->fetch()) {
  ?>
    <div class="wine-card">
      <h2><?= $wine['name'] ?></h2>
      <div class="container">
        <div class="text-container">
          <div class="buttons">
            <h4><?= $wine['year'] ?></h4>
            <h4><?= $wine['country'] ?></h4>
            <h4><?= $wine['region'] ?></h4>
          </div>
          <p><?= $wine['description'] ?></p>
        </div>
        <img src="<?= $wine['picture'] ? "./assets/uploads/" . $wine['picture'] : './assets/img/generic.jpg' ?>" alt="photo-bouteille">
      </div>

    </div>

  <?php
  };
  ?>
</div>