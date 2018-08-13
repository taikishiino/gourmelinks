// bootstrap読み込むと表示速度が4秒程増加
// require('./bootstrap');

window.Vue = require('vue');

let Myheader = require('./components/MyHeader.vue');
let Myfooter = require('./components/MyFooter.vue');

const app = new Vue({
    el: '#app',
    components:{Myheader,Myfooter}
});
