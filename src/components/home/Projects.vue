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
      <b-row>
        <b-col
          cols="6"
          v-for="repo in projects.repositories"
          v-bind:key="repo.id"
        >
          <b-card
            class="w-100 h-100 shadow-sm"
            :title="repo.name"
            :sub-title="repo.description"
            bg-variant="dark"
            border-variant="dark"
            text-variant="white"
          >
            <b-link v-if="repo.html_url" :href="repo.html_url" class="card-link"
              >View on Github</b-link
            >
            <b-link v-if="repo.homepage" :href="repo.homepage" class="card-link"
              >View Website</b-link
            >
          </b-card>
        </b-col>
      </b-row>
    </b-container>
  </div>
</template>

<script>
export default {
  name: "Footer",
  data() {
    return {
      projects: {}
    };
  },
  mounted: function() {
    this.GitHubAPI.get(
      "/users/marc0tjevp/repos",
      { per_page: 10, page: 1, sort: "date-asc", forks: false },
      [this.projects, "repositories"]
    );
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
