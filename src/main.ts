import Vue from "vue";
import App from "./App.vue";
import router from "./router";
import BootstrapVue from "bootstrap-vue";
import VueResource from "vue-resource";
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";
import { library } from "@fortawesome/fontawesome-svg-core";

// Not compatible
const GitHubAPI = require("vue-github-api");

// Bootstrap Styling
import "bootstrap/dist/css/bootstrap.css";
import "bootstrap-vue/dist/bootstrap-vue.css";

// Vue Use
Vue.use(BootstrapVue);
Vue.use(VueResource);
Vue.use(GitHubAPI, { token: process.env.VUE_APP_GITHUB_TOKEN });

// Font Awesome Imports
import {
  faPhoneSquare,
  faEnvelopeSquare,
  faCoffee,
  faHeart,
  faEllipsisH
} from "@fortawesome/free-solid-svg-icons";

import {
  faLinkedin,
  faGitlab,
  faGithubSquare,
  faGithub
} from "@fortawesome/free-brands-svg-icons";

library.add(faPhoneSquare, faEnvelopeSquare, faCoffee, faHeart, faEllipsisH);
library.add(faGitlab, faLinkedin, faGithubSquare, faGithub);

Vue.component("font-awesome-icon", FontAwesomeIcon);
Vue.config.productionTip = false;

new Vue({
  router,
  render: h => h(App)
}).$mount("#app");
