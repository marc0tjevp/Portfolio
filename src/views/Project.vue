<template>
  <div id="project" class="component">
    <b-container>
      <template v-if="project">
        <b-row>
          <b-col cols="6">
            <h4>{{ project.name }}</h4>
          </b-col>
        </b-row>
        <b-row>
          <b-col>
            <h1>{{ project }}</h1>
          </b-col>
        </b-row>
      </template>
    </b-container>
  </div>
</template>

<script>
import { DATA_PROJECT_SHOWCASE } from "../data/projects.data.ts";
export default {
  name: "Project",
  data() {
    return {
      project: {}
    };
  },
  mounted: function() {
    this.getProject();
  },
  methods: {
    getProject() {
      this.project = DATA_PROJECT_SHOWCASE.filter(p => {
        return p.name === this.$route.params.name;
      })[0];
    }
  },
  watch: {
    $route(to, from) {
      this.getProject();
    }
  }
};
</script>

<style lang="scss" scoped>
@import "../../node_modules/bootstrap/scss/bootstrap";
#project {
  background: darken($dark, 5%);
  color: $white;
}
[class*="col-"] {
  margin-bottom: 20px !important;
}
</style>
