<template>
  <div class="social">
    <div class="row">
      <div v-for="(item, index) in socials" :key="index">
        <b-col>
          <a :target="item.target" :href="item.url">
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
  props: ["iconSize"],
  data() {
    return {
      socials: [
        {
          name: "linkedin",
          icon: `fa fa-${iconSize}x fa-linkedin-square`,
          url: "https://www.linkedin.com/in/marc0tjevp",
          target: "_blank"
        },
        {
          name: "email",
          icon: "fa fa-3x fa-envelope-square",
          url: "mailto:marcovanpoortvliet@pm.me",
          target: "_blank"
        },
        {
          name: "github",
          icon: "fa fa-3x fa-github-square",
          url: "https://github.com/marc0tjevp",
          target: "_blank"
        },
        {
          name: "gitlab",
          icon: "fa fa-3x fa-gitlab",
          url: "https://gitlab.com/marc0tjevp",
          target: "_blank"
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
