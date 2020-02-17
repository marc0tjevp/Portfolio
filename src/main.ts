import Vue from "vue";
import App from "./App.vue";
import router from "./router";
import store from "./store";
import BootstrapVue from "bootstrap-vue";
import "bootstrap/dist/css/bootstrap.css";
import "bootstrap-vue/dist/bootstrap-vue.css";
import VueResource from "vue-resource";
const GitHubAPI = require("vue-github-api");

Vue.use(BootstrapVue);
Vue.use(VueResource);
Vue.use(GitHubAPI, { token: "86c2b1633111d9a43f6b273bf27f66da6df40dbc" });

Vue.config.productionTip = false;

new Vue({
  router,
  store,
  render: h => h(App)
}).$mount("#app");
