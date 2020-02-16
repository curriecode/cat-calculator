require("./bootstrap");
import Vue from "vue";
import Calculator from "./components/Calculator";
import App from "./components/App";

Vue.component("Calculator", Calculator);
const app = new Vue({
    el: "#app",
    render: h => h(App)
});
