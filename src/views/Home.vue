<template>
  <div id="home">
    <Hero />
    <Showcase />
    <Projects />
  </div>
</template>

<script>
import Hero from "../components/home/Hero.vue";
import About from "../components/home/About.vue";
import Projects from "../components/home/Projects.vue";
import Showcase from "../components/home/Showcase.vue";

export default {
  name: "home",
  components: {
    Hero,
    Showcase,
    Projects
  }
};
</script>
