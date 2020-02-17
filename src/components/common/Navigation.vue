<template>
  <div id="navigation">
    <b-navbar type="dark">
      <b-collapse is-nav>
        <b-navbar-nav class="ml-auto">
          <b-navbar-nav>
            <b-nav-item to="/">Home</b-nav-item>
            <b-nav-item to="/">About Me</b-nav-item>
            <b-nav-item to="/">Projects</b-nav-item>
            <b-nav-item to="/">Contact</b-nav-item>
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
  /* We don't need it, yet */
  display: none;
}
</style>
