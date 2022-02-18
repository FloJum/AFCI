<template>
  <div id="nav">
    <nav
      class="navbar fixed-top navbar-expand-lg container-fluid text-uppercase"
    >
      <button
        id="navbtn"
        class="navbar-toggler ml-2 custom-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon navbtn"></span>
      </button>
      <!-- <a class="navbar-brand mr-4 ml-lg-5" href="index.html">
        <img
          src="./img/fond/Logo 150x100.png"
          width="100"
          height="50"
          style="border-radius: 50%;"
          alt="Logo JF"
        />
      </a> -->
      <div
        class="collapse navbar-collapse ml-lg-3 justify-content-center"
        id="navbarSupportedContent"
      >
        <div class="navbar-nav">
          <router-link to="/" class="nav-item nav-link"
            >A propos de moi</router-link
          >
          <router-link to="/cv" class="nav-item nav-link">Mon CV</router-link>
          <router-link to="/sites" class="nav-item nav-link"
            >Mes sites (à venir)</router-link
          >
        </div>
      </div>
    </nav>
  </div>
  <router-view />
  <footer>
    <h6>
      Florian Jumeaucourt - Développeur Web - Aisne
      <a href="mailto:fjumeaucourt@wolfsnake.website"
        >fjumeaucourt@wolfsnake.website</a
      >
    </h6>
  </footer>
</template>

<style>
@import "./assets/css/navbarfooter.css";
</style>
