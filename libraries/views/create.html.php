<div class="create-container">
  <h1>Ajouter un vin</h1>
  <div class="create-form">
    <form action="libraries/controllers/wines.php" method="post" enctype="multipart/form-data">
      <label for="">Nom</label>
      <input type="text" name="name" placeholder="nom">
      <br>
      <label for="">Millésime</label>
      <select name="year">
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
      <br>
      <label for="">Cépage</label>
      <input type="text" name="grapes" placeholder="cépage"><br>

      <label for="">Pays</label>
      <input type="text" name="country" placeholder="pays"><br>

      <label for="">Région</label>
      <input type="text" name="region" placeholder="région"><br>

      <label for="">Description</label>
      <textarea name="description" placeholder="description du vin..." cols="30" rows="10"></textarea><br>

      <input type="file" name="picture"><br>

      <input type="submit" value="Envoyer">
    </form>
  </div>



</div>