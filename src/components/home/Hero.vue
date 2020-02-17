<template>
  <div id="hero">
    <b-jumbotron fluid class="shadow-lg">
      <b-row>
        <b-col cols="4">
          <Gravatar class="shadow-lg" />
        </b-col>
        <b-col cols="8">
          <h1>Marco van Poortvliet</h1>
          <p>Software Developer &amp; Student Information Technology</p>
          <Social iconSize="3" />
        </b-col>
      </b-row>
    </b-jumbotron>
  </div>
</template>

<script>
import Gravatar from "../common/Gravatar.vue";
import Social from "../common/Social.vue";

export default {
  name: "Hero",
  components: {
    Gravatar,
    Social
  }
};
</script>

<style lang="scss" scoped>
.jumbotron {
  /* Correct hacky navbar */
  padding-top: 100px !important;
  padding-bottom: 100px;
  color: white;
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
    url("https://marcovp.nl/img/background.gif");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  margin: 0;
}
</style>
