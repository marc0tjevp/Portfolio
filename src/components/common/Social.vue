<template>
  <div class="social">
    <div class="row">
      <div v-for="(item, index) in socials" :key="index">
        <b-col>
          <a :target="item.target" :href="item.url">
            <i :class="`fa fa-${iconSize}x ${item.icon}`"></i>
          </a>
        </b-col>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
import MD5 from "md5";

import { DATA_ME_SOCIAL } from "../../data/me.data.ts";

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
      socials: DATA_ME_SOCIAL
    };
  }
};
</script>

<style lang="scss" scoped>
a .fa {
  color: #fff;
}
</style>
