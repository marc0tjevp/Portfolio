<template>
  <div id="projects" class="component">
    <b-container>
      <b-row>
        <b-col cols="6">
          <h4>Projects</h4>
        </b-col>
        <b-col class="text-right" cols="6">
          <b-button class="lightgreen">
            <i class="fa fa-github" /> More projects
          </b-button>
        </b-col>
      </b-row>
      <b-row v-for="(chunk, index) in repoChunks" v-bind:key="index">
        <b-col cols="6" v-for="(repo, index) in chunk" v-bind:key="index">
          <GithubProject class="h-100" :repo="repo" />
        </b-col>
      </b-row>
    </b-container>
  </div>
</template>

<script>
import GithubProject from "../common/GithubProject.vue";
import _ from "lodash";

export default {
  name: "Projects",
  components: {
    GithubProject
  },
  data() {
    return {
      projects: {}
    };
  },
  mounted: function() {
    this.GitHubAPI.get(
      "/users/marc0tjevp/repos",
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
.col-6 {
  margin-bottom: 20px !important;
}
</style>
