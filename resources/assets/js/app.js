require("./bootstrap");
import Vue from "vue";
import Calculator from "./components/Calculator";
import App from "./components/App";
import Catpic from "./components/Catpic.vue";

Vue.component("Calculator", Calculator);
Vue.component("Catpic", Catpic);

const app = new Vue({
    el: "#app",
    render: h => h(App)
});
