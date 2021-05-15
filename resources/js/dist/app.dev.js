"use strict";

var _inertiaVue = require("@inertiajs/inertia-vue");

var _vue = _interopRequireDefault(require("vue"));

var _vuetify = _interopRequireDefault(require("vuetify"));

require("vuetify/dist/vuetify.min.css");

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { "default": obj }; }

_vue["default"].use(_vuetify["default"]);

_vue["default"].use(_inertiaVue.plugin);

var el = document.getElementById('app');
new _vue["default"]({
  vuetify: new _vuetify["default"](),
  render: function render(h) {
    return h(_inertiaVue.App, {
      props: {
        initialPage: JSON.parse(el.dataset.page),
        resolveComponent: function resolveComponent(name) {
          return require("./Pages/".concat(name))["default"];
        }
      }
    });
  }
}).$mount(el);