<template>
  <div id="app">
    <Navigation />
    <router-view />
    <Footer />
  </div>
</template>

<script>
import Navigation from "./components/Navigation.vue";
import Footer from "./components/Footer.vue";

export default {
  name: "app",
  components: {
    Navigation,
    Footer
  }
};
</script>

<style lang="scss">
.offwhite {
  background-color: #f8f9fa;
}
.lightgreen {
  background-color: #0f6f64;
}
.green {
  background-color: #085f55;
}
.component {
  padding: 50px 0 50px;
}
</style>
