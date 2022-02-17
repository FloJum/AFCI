<template>
  <div class="about">
    <h1>This is an about page</h1>
    <p>Vient du script: {{ message }}</p>
    <p>Seulement premier mot: {{ onlyFirstWord }} </p>
  </div>
</template>

<script>
export default {
  data() {
    return {
      message:"incroyable ça marche"
    }
  },
  computed: {
    onlyFirstWord() {
      return this.message.split('')[1].toUpperCase();
    }
  }
}
</script>