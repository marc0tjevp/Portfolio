<template>
  <div id="projects" class="component">
    <b-container>
      <b-row>
        <b-col cols="6">
          <h4>Projects</h4>
        </b-col>
        <b-col class="text-right" cols="6">
          <b-button :href="this.github" target="_blank" class="lightgreen">
            <i class="fa fa-github" /> More projects
          </b-button>
        </b-col>
      </b-row>
      <template v-if="downloading">
        <div class="d-flex justify-content-center">
          <b-spinner class="mb-12" label="Loading..."></b-spinner>
        </div>
      </template>
      <b-row v-for="(chunk, index) in repoChunks" v-bind:key="index">
        <b-col
          cols="12"
          sm="12"
          md="12"
          lg="6"
          xl="6"
          v-for="(repo, index) in chunk"
          v-bind:key="index"
        >
          <GithubProject class="test h-100" :repo="repo" />
        </b-col>
      </b-row>
    </b-container>
  </div>
</template>

<script>
import Vue from "vue";
import Vuex from "vuex";
import _ from "lodash";

import GithubProject from "../common/GithubProject.vue";
import { DATA_PROJECT_GITHUB_USERNAME } from "../../data/projects.data.ts";

Vue.use(Vuex);
const store = new Vuex.Store({});

export default {
  name: "Projects",
  components: {
    GithubProject
  },
  data() {
    return {
      github: `https://github.com/${DATA_PROJECT_GITHUB_USERNAME}`,
      projects: {}
    };
  },
  mounted: function() {
    this.GitHubAPI.registerStore(store);
    this.GitHubAPI.get(
      `/users/${DATA_PROJECT_GITHUB_USERNAME}/repos`,
      { per_page: 10, page: 1, sort: "updated", forks: false },
      [this.projects, "repositories"]
    );
  },
  computed: {
    repoChunks() {
      try {
        return _.chunk(Object.values(this.projects.repositories), 2);
      } catch {
        return [];
      }
    },
    downloading: function() {
      if (typeof store.state.GitHubAPI !== "undefined") {
        return store.state.GitHubAPI.downloading;
      } else {
        return false;
      }
    }
  }
};
</script>

<style lang="scss" scoped>
@import "../../../node_modules/bootstrap/scss/bootstrap";
#projects {
  background: darken($dark, 5%);
  color: $white;
}
[class*="col-"] {
  margin-bottom: 20px !important;
}
.spinner-border {
  margin-top: 20px;
  height: 4rem;
  width: 4rem;
}
</style>
