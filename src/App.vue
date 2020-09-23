<template>
  <div id="app">
    <Navigation />
    <router-view class="content" />
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
@import "../node_modules/bootstrap/scss/bootstrap";

body {
  background: darken($dark, 5%) !important;
}
.content {
  min-height: calc(100vh - 230px);
}
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
.breadcrumb {
  background: darken($dark, 8%) !important;
  border-radius: 0 !important;
  .breadcrumb-item {
    a {
      color: #fff !important;
    }
  }
}
</style>
