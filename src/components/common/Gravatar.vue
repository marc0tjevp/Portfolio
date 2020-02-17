<!-- 
    This might look  overkill for just an avatar, but I like the idea of 
    updating my avatar on a lot of services that I use at once.
-->
<template>
  <b-img
    fluid
    class="rounded-circle Gravatar--img"
    :src="getImage(this.email, 1024)"
  />
</template>

<script>
import axios from "axios";
import MD5 from "md5";

import { DATA_ME } from "../../data/me.data.ts";

export default {
  name: "Gravatar",
  data() {
    return {
      url: "none",
      email: DATA_ME.avatar
    };
  },
  methods: {
    getImage(email, size) {
      return "https://www.gravatar.com/avatar/" + MD5(email) + ".jpg?s=" + size;
    }
  }
};
</script>

<style lang="scss" scoped>
.Gravatar--img {
  max-height: 200px !important;
}
</style>
