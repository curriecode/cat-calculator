require('./bootstrap');
import Vue from 'vue'
import Acme from './components/Acme'
import App from './components/App'
Vue.component('acme', Acme)
const app = new Vue({
    el: '#app',
    render: h => h(App)
})
