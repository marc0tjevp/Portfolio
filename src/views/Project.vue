<template>
  <div id="project">
    <b-breadcrumb class="shadow-sm" :items="items"></b-breadcrumb>
    <b-container class="component">
      <b-row>
        <b-col cols="6">
          <h2>{{ project.name }}</h2>
          <p>{{ project.description }}</p>
          <b-badge
            v-for="(language, index) in project.languages"
            :key="index"
            :style="'background:' + language.color"
            class="shadow-sm"
            >{{ language.name }}
          </b-badge>
        </b-col>
        <b-col cols="6">
          <b-img
            right
            fluid
            :src="project.image"
            :alt="project.name"
            class="shadow"
          ></b-img>
        </b-col>
      </b-row>
      <b-row v-for="(section, index) in project.sections" :key="index">
        <b-col cols="12">
          <h4>{{ section.title }}</h4>
          <p>{{ section._text }}</p>
        </b-col>
      </b-row>
    </b-container>
  </div>
</template>

<script>
import { DATA_PROJECT_SHOWCASE } from "../data/projects.data.ts";
export default {
  name: "Project",
  data() {
    return {
      project: {},
      items: []
    };
  },
  mounted: function() {
    this.getProject();
    this.getBreadcrumb();
  },
  methods: {
    getBreadcrumb() {
      this.items = [
        {
          text: "Home",
          href: "/"
        },
        {
          text: "Projects",
          href: "/"
        },
        {
          text: this.project.name,
          active: true
        }
      ];
    },
    getProject() {
      this.project = DATA_PROJECT_SHOWCASE.filter(p => {
        return p.name === this.$route.params.name;
      })[0];
    }
  },
  watch: {
    $route(to, from) {
      this.getProject();
      this.getBreadcrumb();
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
.badge {
  margin-right: 5px;
  padding: 5px;
  font-size: 90%;
}
</style>
