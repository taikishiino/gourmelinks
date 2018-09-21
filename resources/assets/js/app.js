(() => {
    // セキュリティチェック
    'use strict';

    // vueのimport
    window.Vue = require('vue');

    let Myheader = require('./components/MyHeader.vue');
    let Myfooter = require('./components/MyFooter.vue');

    const app = new Vue({
        el: '#app',
        components:{Myheader,Myfooter}
    });



    // firebaseの連携
    const config = {
        apiKey: "AIzaSyAdL38AiWcLB35H9EvHsedKNE3oAcWxI7U",
        authDomain: "gourmelinks.firebaseapp.com",
        databaseURL: "https://gourmelinks.firebaseio.com",
        projectId: "gourmelinks",
        storageBucket: "gourmelinks.appspot.com",
        messagingSenderId: "681142273951"
    };
    firebase.initializeApp(config);

    /* firebaseサービスのインスタンス定義 */
    // firestoreインスタンスを定義
    const firestore = firebase.firestore();
    // dbのtimestampを設定
    firestore.settings({
        timestampsInSnapshots: true
    });
    // Cloud Storageインスタンスを定義
    const storage = firebase.storage();
    // authインスタンスを定義
    const auth = firebase.auth();
    let me = null;

})();