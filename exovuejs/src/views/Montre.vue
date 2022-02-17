<template>
  <div id="montrePage">
    <input
      class="m-3"
      style="width: auto"
    
      type="search"
      id="search"
      placeholder="Rechercher..."
      autocomplete="off"
    />
    <p> Hello {{ message }} </p>
  <!-- <div class="d-flex">
    <div class="row col-12">
      <div class="col-3 contenant m-3" v-for="product in filterList">
        <img v-bind:src="product.img" :alt="product.description" />
        <div class="titre">
          {{ product.description }} ... {{ product.price }}€
        </div>
      </div>
    </div>
  </div>
  <div v-if="filterList.length == []">
    <h3>Désolé</h3>
    <p>Aucun résultat trouvé</p>
  </div> -->
  </div>
 
</template>

<script>
  export default {
     data() {
       return {
          message: "World",
          compteur: 13,
          
          estActif: true,
          tableauVide: []
       }
    }
  }
</script>

<style>
@import "../assets/css/style.css";
</style>
