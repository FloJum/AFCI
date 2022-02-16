<template>
  <div id="nav">
    
    <nav class="navbar fixed-top navbar-expand-lg container-fluid">
      <button
        class="navbar-toggler ml-3 custom-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon "></span>
      </button>
      <div
        class="collapse navbar-collapse ml-lg-3 justify-content-center"
        id="navbarSupportedContent"
      >
        <div class="navbar-nav">
          <router-link to="/" class="nav-item nav-link">Home</router-link>
          <router-link to="/about" class="nav-item nav-link">About</router-link>
          <router-link to="/montre" class="nav-item nav-link"
            >Montre</router-link
          >
          <router-link to="/contact" class="nav-item nav-link"
            >Contacter</router-link
          >
        </div>
      </div>
    </nav>
  </div>
  <router-view />
</template>

<style>
@import "./assets/css/navbar.css";
</style>
