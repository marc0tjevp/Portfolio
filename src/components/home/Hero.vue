<template>
  <div id="hero">
    <b-jumbotron fluid>
      <b-row class="text-center">
        <b-col cols="12">
          <Gravatar class="shadow-lg" />
        </b-col>
        <b-col cols="12">
          <h1>{{ `${this.me.firstname} ${this.me.surname}` }}</h1>
          <p>{{ this.me.title }}</p>
          <Social iconSize="3" />
        </b-col>
      </b-row>
      <span class="credits">
        Photo by
        <a href="https://unsplash.com/@veeterzy">veeterzy</a>
        on
        <a href="https://unsplash.com/collections/403069/rain">
          Unsplash
        </a>
      </span>
    </b-jumbotron>
  </div>
</template>

<script>
import Gravatar from "../common/Gravatar.vue";
import Social from "../common/Social.vue";

import { DATA_ME } from "../../data/me.data.ts";

export default {
  name: "Hero",
  components: {
    Gravatar,
    Social
  },
  data() {
    return {
      me: {
        firstname: DATA_ME.firstname,
        surname: DATA_ME.surname,
        title: DATA_ME.title
      }
    };
  }
};
</script>

<style lang="scss" scoped>
.jumbotron {
  color: white;
  background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.5)),
    url("../../assets/rain1-min.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  margin: 0;
  .credits {
    display: none;
  }
}
</style>
