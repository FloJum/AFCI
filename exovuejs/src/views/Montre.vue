<template>
  <div class="montrePage">
    <input
      class="m-3"
      style="width: auto"
      v-model="cleRecherche"
      type="search"
      id="search"
      placeholder="Rechercher..."
      autocomplete="off"
    />
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
  const products = [
  {
    id: 1,
    description: "Quarz Luxe",
    price: 12,
    img: "./public/img/quarz-luxe.JPG",
  },
  {
    id: 2,
    description: "Curren Business",
    price: 20,
    img: "/ProjetVueJS/img/curren-business.JPG",
  },
  {
    id: 3,
    description: "Curren Sport",
    price: 5,
    img: "/ProjetVueJS/img/curren-sport.JPG",
  },
  {
    id: 4,
    description: "Jaragar Racing",
    price: 8,
    img: "/ProjetVueJS/img/jaragar-racing.JPG",
  },
  {
    id: 5,
    description: "Liges Hommes",
    price: 3,
    img: "/ProjetVueJS/img/liges-hommes.JPG",
  },
  {
    id: 6,
    description: "Maserati Mechanical",
    price: 65,
    img: "/ProjetVueJS/img/maserati-mechanical.JPG",
  },
  {
    id: 7,
    description: "Montre Mecanique",
    price: 25,
    img: "/ProjetVueJS/img/montre-mecanique.JPG",
  },
  {
    id: 8,
    description: "Brand Designer",
    price: 28,
    img: "/ProjetVueJS/img/brand-designer.JPG",
  },
  {
    id: 9,
    description: "Relogio Masculino",
    price: 4,
    img: "/ProjetVueJS/img/relogio-masculino.JPG",
  },
  {
    id: 10,
    description: "Tissot Multifunction",
    price: 29,
    img: "/ProjetVueJS/img/tissot-multifunction.JPG",
  },
  {
    id: 11,
    description: "Hip Hop Gold",
    price: 87,
    img: "/ProjetVueJS/img/hiphop-gold.JPG",
  },
  {
    id: 12,
    description: "Mesh Genova",
    price: 6,
    img: "/ProjetVueJS/img/mesh-genova.JPG",
  },
];
let montrePage = new Vue({
  el: ".montrePage",
  data: () => {
    return {
      products,
      cleRecherche: "",
    };
  },

  computed: {
    filterList() {
      return this.products.filter((product) => {
        return product.description
          .toLowerCase()
          .includes(this.cleRecherche.toLowerCase());
      });
    },
  },
});
</script>


<style>
@import "../assets/css/style.css";
</style>
