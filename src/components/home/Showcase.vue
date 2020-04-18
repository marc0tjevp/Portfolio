<template>
  <div id="experience" class="component">
    <b-container>
      <b-row>
        <b-col cols="6">
          <h4>Showcase</h4>
        </b-col>
        <b-col class="text-right" cols="6">
          <b-button href="google.com" target="_blank" class="lightgreen">
            <i class="fa fa-ellipsis-h" />
          </b-button>
        </b-col>
      </b-row>
      <b-row>
        <b-col
          v-for="(project, index) in projects"
          :key="index"
          cols="12"
          sm="12"
          md="6"
          lg="3"
          xl="3"
        >
          <PersonalProject class="test h-100" :project="project" />
        </b-col>
      </b-row>
    </b-container>
  </div>
</template>

<script>
import PersonalProject from "../common/PersonalProject.vue";
import { DATA_PROJECT_SHOWCASE } from "../../data/projects.data.ts";

export default {
  name: "Showcase",
  data() {
    return {
      projects: DATA_PROJECT_SHOWCASE
    };
  },
  components: {
    PersonalProject
  }
};
</script>

<style lang="scss" scoped>
@import "../../../node_modules/bootstrap/scss/bootstrap";
#experience {
  background: darken($dark, 8%);
  color: $white;
}
.card-container {
  height: 100px; // Gotta do it somewhere
}
[class*="col-"] {
  margin-bottom: 20px !important;
}
</style>
