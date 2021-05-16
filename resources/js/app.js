import { App, plugin } from "@inertiajs/inertia-vue";
import Vue from "vue";
import Vuetify from "vuetify";
import "vuetify/dist/vuetify.min.css";
import "@mdi/font/css/materialdesignicons.css";

Vue.use(Vuetify);
Vue.use(plugin);

const el = document.getElementById("app");

new Vue({
  vuetify: new Vuetify({
    icons: {
      iconfont: "mdiSvg",
    },
  }),
  render: (h) =>
    h(App, {
      props: {
        initialPage: JSON.parse(el.dataset.page),
        resolveComponent: (name) => require(`./Pages/${name}`).default,
      },
    }),
}).$mount(el);
