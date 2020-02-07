<template>
  <div>
    <div class="footer lightgreen">
      <b-container>
        <b-row>
          <b-col>
            <h4>Contact</h4>
            dont talk to me pls
          </b-col>
          <b-col>
            <h4>Online Profiles</h4>
            <Social iconSize="1" />
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

export default {
  name: "Footer",
  components: {
    Social
  }
};
</script>

<style lang="scss" scoped>
* {
  color: white;
}
.footer {
  padding: 50px;
}
.subfooter {
  padding: 20px;
  p {
    margin: 0;
  }
}
</style>
