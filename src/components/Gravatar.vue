<!-- 
    This might look  overkill for just an avatar, but I like the idea of 
    updating my avatar on a lot of services that I use at once.
-->
<template>
  <b-img fluid :src="getImage('marcovanpoortvliet@protonmail.com', 1024)" />
</template>

<script>
import axios from "axios";
import MD5 from "md5";

export default {
  name: "Gravatar",
  data() {
    return {
      url: "none"
    };
  },
  methods: {
    getImage(email, size) {
      return "http://www.gravatar.com/avatar/" + MD5(email) + ".jpg?s=" + size;
    }
  }
};
</script>
