<template>
  <div class="social">
    <div class="row">
      <b-col>
        <div class="icon-wrapper" v-for="(item, index) in socials" :key="index">
          <a :target="item.target" :href="item.url">
            <font-awesome-icon
              :class="`fa fa-${iconSize}x`"
              :icon="[item.prefix, item.icon]"
            />
          </a>
        </div>
      </b-col>
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
.icon-wrapper {
  display: inline-block;
}
a .fa {
  color: #fff;
}
.icon-wrapper:not(:last-child) {
  margin-right: 25px;
}
</style>
