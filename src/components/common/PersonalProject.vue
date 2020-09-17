<template>
  <div id="githubproject">
    <b-card
      :title="project.name"
      :img-src="project.image"
      class="shadow-sm h-100"
      bg-variant="dark"
      border-variant="dark"
      text-variant="white"
      overlay
      v-on:click="handleProject(project.name, project.repoUrl)"
    >
    </b-card>
  </div>
</template>

<script>
export default {
  name: "GithubProject",
  props: {
    project: {
      type: Object
    }
  },
  methods: {
    // Link to repo for now!
    handleProject(name, repo) {
      window.open(repo, "_blank");
      // this.$router.push({ name: "project", params: { name: name } });
    }
  }
};
</script>

<style lang="scss" scoped>
.card {
  max-height: 200px;
  cursor: pointer;
  overflow: hidden;
}
.card:hover {
  transform: scale(1.025);
  transition: 0.25s ease;
}
.card-img-overlay {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.1));
}
.card-img {
  display: block;
  width: 100%;
  height: 100%;
  object-fit: cover;
}
a {
  color: lighten(#0d4e47, 15%) !important;
}
a:hover {
  color: lighten(#0d4e47, 10%) !important;
}
</style>
