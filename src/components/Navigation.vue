<template>
  <div id="navigation">
    <b-navbar type="dark">
      <b-navbar-brand href="#">Portfolio</b-navbar-brand>

      <b-collapse is-nav>
        <!-- Right aligned nav items -->
        <b-navbar-nav class="ml-auto">
          <b-navbar-nav>
            <b-nav-item to="/">Home</b-nav-item>
          </b-navbar-nav>
        </b-navbar-nav>
      </b-collapse>
    </b-navbar>
  </div>
</template>

<style scoped>
.navbar {
  /* Oof: Make sure the jumbotron is under the navbar */
  margin-bottom: -56px;
}
</style>
