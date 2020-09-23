<template>
  <div id="about" class="component">
    <b-container>
      <b-row>
        <b-col cols="6">
          <b-card
            class="shadow-sm h-100"
            title="Hi, it's me!"
            bg-variant="dark"
            border-variant="dark"
            text-variant="white"
          >
            Something about me
          </b-card>
        </b-col>

        <b-col cols="6">
          <b-card
            class="shadow-sm h-100"
            title="Experience"
            bg-variant="dark"
            border-variant="dark"
            text-variant="white"
          >
            I like cards
          </b-card>
        </b-col>
      </b-row>
    </b-container>
  </div>
</template>

<script>
import Vue from "vue";

import { DATA_PROJECT_GITHUB_USERNAME } from "../../data/projects.data.ts";

export default {
  name: "About",
  data() {
    return {};
  }
};
</script>

<style lang="scss" scoped>
@import "../../../node_modules/bootstrap/scss/bootstrap";
#about {
  background: darken($dark, 5%);
  color: $white;
}
[class*="col-"] {
  margin-bottom: 20px !important;
}
</style>
