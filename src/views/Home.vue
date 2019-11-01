<template>
  <div id="home">
    <Hero />
    <About />
    <Projects />
    <Experience />
  </div>
</template>

<script>
import Hero from "../components/Hero.vue";
import About from "../components/About.vue";
import Projects from "../components/Projects.vue";
import Experience from "../components/Experience.vue";

export default {
  name: "home",
  components: {
    Hero,
    About,
    Projects,
    Experience
  }
};
</script>
