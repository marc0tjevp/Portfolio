<template>
  <div id="home">
    <Hero />
    <Projects />
  </div>
</template>

<script>
import Hero from "../components/home/Hero.vue";
import About from "../components/home/About.vue";
import Projects from "../components/home/Projects.vue";
import Experience from "../components/home/Experience.vue";

export default {
  name: "home",
  components: {
    Hero,
    Projects
  }
};
</script>
