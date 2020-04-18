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

// TODO: vars
<style lang="scss">
.offwhite {
  background-color: #f8f9fa !important;
}
.lightgreen {
  background-color: #0e574f !important;
}
.green {
  background-color: darken(#0e574f, 2%) !important;
}
.component {
  padding-top: 50px;
  padding-bottom: 50px;
}
</style>
