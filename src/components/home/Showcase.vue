<template v-if="projects.length > 0">
  <div id="experience" class="component">
    <b-container>
      <b-row>
        <b-col cols="6">
          <h4>Showcase</h4>
        </b-col>
        <b-col class="text-right" cols="6">
          <b-button
            v-on:click="handleButtonClick"
            :disabled="slicer >= projects.length"
            target="_blank"
            class="lightgreen"
          >
            <i class="fa fa-ellipsis-h" />
          </b-button>
        </b-col>
      </b-row>
      <b-row>
        <b-col
          v-for="(project, index) in projects.slice(0, slicer)"
          :key="index"
          cols="6"
          sm="6"
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
      projects: DATA_PROJECT_SHOWCASE,
      slicer: 4
    };
  },
  components: {
    PersonalProject
  },
  methods: {
    handleButtonClick() {
      this.slicer += 4;
    }
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
