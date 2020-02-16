require("./bootstrap");
import Vue from "vue";
import Calculator from "./components/Calculator";
import App from "./components/App";
import Catpic from "./components/Catpic.vue";
import Header from "./components/Header.vue";

Vue.component("Calculator", Calculator);
Vue.component("Catpic", Catpic);
Vue.component("Header", Header);

const app = new Vue({
    el: "#app",
    render: h => h(App)
});
