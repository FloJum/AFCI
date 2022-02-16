<template>
  <div id="nav">
    <router-link to="/">Home</router-link> |
    <router-link to="/about">About</router-link> |
    <router-link to="/contact">Contacter</router-link>
  </div>
  <router-view />
</template>

<style>

@import './assets/css/navbar.css';
</style>
