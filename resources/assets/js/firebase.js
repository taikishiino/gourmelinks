import firebase from 'firebase/app'
import storage from 'firebase/storage'
import auth from 'firebase/auth'
import db from 'firebase/firestore'

// firebaseの連携
firebase.initializeApp({
    apiKey: "AIzaSyAdL38AiWcLB35H9EvHsedKNE3oAcWxI7U",
    authDomain: "gourmelinks.firebaseapp.com",
    databaseURL: "https://gourmelinks.firebaseio.com",
    projectId: "gourmelinks",
    storageBucket: "gourmelinks.appspot.com",
    messagingSenderId: "681142273951"
});

export { firebase, storage, auth, db }