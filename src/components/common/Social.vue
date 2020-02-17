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
  props: {
    iconSize: {
      type: String,
      default: "3"
    }
  },
  data() {
    return {
      socials: [
        {
          name: "linkedin",
          icon: `fa fa-${this.iconSize}x fa-linkedin-square`,
          url: "https://www.linkedin.com/in/marc0tjevp",
          target: "_blank"
        },
        {
          name: "email",
          icon: `fa fa-${this.iconSize}x fa-envelope-square`,
          url: "mailto:marcovanpoortvliet@pm.me",
          target: "_blank"
        },
        {
          name: "github",
          icon: `fa fa-${this.iconSize}x fa-github-square`,
          url: "https://github.com/marc0tjevp",
          target: "_blank"
        },
        {
          name: "gitlab",
          icon: `fa fa-${this.iconSize}x fa-gitlab`,
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
