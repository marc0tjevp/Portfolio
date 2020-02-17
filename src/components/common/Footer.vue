<template>
  <div>
    <div class="footer lightgreen">
      <b-container>
        <b-row>
          <b-col cols="12" sm="12" md="12" lg="6" xl="6">
            <ul>
              <li><i class="fa fa-phone-square" /> {{ contact.phone }}</li>
              <li><i class="fa fa-envelope-square" /> {{ contact.email }}</li>
            </ul>
          </b-col>
          <b-col cols="12" sm="12" md="12" lg="6" xl="6">
            <Social iconSize="2" />
          </b-col>
        </b-row>
      </b-container>
    </div>
    <div class="subfooter green text-center">
      <b-row>
        <b-col>
          <p>
            Made with <i class="fa fa-coffee" /> and <i class="fa fa-heart" />
          </p>
        </b-col>
      </b-row>
    </div>
  </div>
</template>

<script>
import Social from "../common/Social.vue";

import { DATA_ME_CONTACT } from "../../data/me.data.ts";

export default {
  name: "Footer",
  components: {
    Social
  },
  data() {
    return {
      contact: {
        msg:
          "Call me or shoot me a message if you want to chat or if you have a question",
        phone: DATA_ME_CONTACT.phone,
        email: DATA_ME_CONTACT.email
      }
    };
  }
};
</script>

<style lang="scss" scoped>
* {
  color: white;
}
.footer {
  padding: 50px;
  ul {
    list-style: none;
    padding: 0;
  }
}
.subfooter {
  padding: 20px;
  p {
    margin: 0;
  }
  i {
    margin: 5px;
  }
}
</style>
