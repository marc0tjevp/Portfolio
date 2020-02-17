<template>
  <div id="githubproject">
    <b-card
      class="shadow-sm h-100"
      :title="repo.name"
      :sub-title="repo.description"
      bg-variant="dark"
      border-variant="dark"
      text-variant="white"
    >
      <b-link
        target="_blank"
        v-if="repo.html_url"
        :href="repo.html_url"
        class="card-link"
        >View on Github</b-link
      >
      <b-link
        target="_blank"
        v-if="repo.homepage"
        :href="repo.homepage"
        class="card-link"
        >View Website</b-link
      >
    </b-card>
  </div>
</template>

<script>
export default {
  name: "GithubProject",
  props: {
    repo: {
      type: Object
    }
  }
};
</script>

<style lang="scss" scoped>
a {
  color: lighten(#0d4e47, 15%) !important;
}
a:hover {
  color: lighten(#0d4e47, 10%) !important;
}
</style>
