import Vue from 'vue'
Vue.config.productionTip = false;
// vueのimport
window.Vue = require('vue');


Vue.component('Myheader', require('./components/MyHeader.vue'));
Vue.component('Myfooter', require('./components/MyFooter.vue'));
Vue.component('Regist', require('./components/MyRegist.vue'));
Vue.component('Login', require('./components/MyLogin.vue'));

const app = new Vue({
    el: '#app'
});
