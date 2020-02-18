import Vue from "vue";
import App from "./App.vue";
import router from "./router";
import BootstrapVue from "bootstrap-vue";
import "bootstrap/dist/css/bootstrap.css";
import "bootstrap-vue/dist/bootstrap-vue.css";
import VueResource from "vue-resource";
const GitHubAPI = require("vue-github-api");
Vue.use(BootstrapVue);
Vue.use(VueResource);
Vue.use(GitHubAPI, { token: process.env.VUE_APP_GITHUB_TOKEN });

Vue.config.productionTip = false;

new Vue({
  router,
  render: h => h(App)
}).$mount("#app");
