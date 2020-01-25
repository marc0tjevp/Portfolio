<template>
  <div class="social">
    <div class="row">
      <div v-for="(item, index) in socials" :key="index">
        <b-col>
          <a :href="item.url">
            <i :class="item.icon"></i>
          </a>
        </b-col>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
import MD5 from "md5";

export default {
  name: "Social",
  data() {
    return {
      socials: [
        {
          name: "linkedin",
          icon: "fa fa-3x fa-linkedin-square",
          url: "https://www.linkedin.com/in/marc0tjevp"
        },
        {
          name: "email",
          icon: "fa fa-3x fa-envelope-square",
          url: "mailto:marcovanpoortvliet@protonmail.com"
        },
        {
          name: "github",
          icon: "fa fa-3x fa-github-square",
          url: "https://github.com/marc0tjevp"
        }
      ]
    };
  }
};
</script>

<style lang="scss" scoped>
a .fa {
  color: #fff;
}
</style>
