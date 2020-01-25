<template>
  <div id="app">
    <Navigation />
    <router-view />
    <Footer />
  </div>
</template>

<script>
import Navigation from "./components/common/Navigation.vue";
import Footer from "./components/common/Footer.vue";

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
  background-color: #f8f9fa !important;
}
.lightgreen {
  background-color: #0f6f64 !important;
}
.green {
  background-color: #085f55 !important;
}
.component {
  padding: 50px 0 50px;
}
</style>
