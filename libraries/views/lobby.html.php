<div id="vue-app" class="lobby-container">
  <ul>
    <li v-on:click="searchInput('name')" class="name">
      <i class="fas fa-search"></i>
      <input v-if="inputType == 'name'" v-model="searchKey" type="search" placeholder="Entrez le nom d'un vin...">
    </li>
    <li v-on:click="searchInput('country')" class="country">
      <i class="fas fa-globe-europe"></i>
      <select v-if="inputType == 'country'" v-model="countrySelected">
        <option selected>Choisir pays</option>
        <option v-for="option in sortedCountry" v-bind:value="option.id">{{option.name}}</option>
      </select>

      <h2 v-if="inputType == ''">Liste des vins</h2>
    </li>
    <li v-on:click="searchInput('grapes')" class="grapes">
      <i class="fas fa-wine-glass-alt"></i>
      <input v-if="inputType == 'grapes'" type="search">
    </li>
  </ul>

  <h3 v-if="searchByName.length == 0">Aucun résultat</h3>
  <div v-for="wine, id in searchByName" class="wine-list">
    <div class="wine-card">
      <div class="card-header">
        <h2>{{wine.name}}</h2>
        <i @click="removeItem(id)" class="fas fa-times"></i>
      </div>
      <div class="container">
        <div class="text-container">
          <div class="buttons">
            <h4>{{wine.year}}</h4>
            <h4>{{wine.country}}</h4>
            <h4>{{wine.region}}</h4>
          </div>
          <p>{{wine.description}}</p>
        </div>
        <img :src="getImgUrl(wine.picture)" alt="photo-bouteille">
      </div>
    </div>
  </div>
</div>