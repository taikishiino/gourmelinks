<template>
    <header>
        <div class="hWarapper">
            <nav class="navbar" role="navigation" aria-label="main navigation">
                <div class="navbar-brand">
                    <a class="navbar-item" href="/">
                        <img src="" alt="Gourmelinks" width="112" height="28">
                    </a>

                    <div class="navbar-burger burger" data-target="navbarMenu" @click="showNav = !showNav" :class="{'is-active': showNav}">
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                    </div>
                </div>
                <div class="navbar-menu" :class="{'is-active':showNav}">
                    <div class="navbar-end">
                        <div class="navbar-item">
                            <div class="field is-grouped">
                                <div class="control">
                                    <a href="/regist" v-bind:class="{hidden: isActive}" class="button is-primary">アカウント作成</a>
                                </div>
                                <div class="control">
                                    <a href="/login" v-bind:class="{hidden: isActive}" class="button is-primary">ログイン</a>
                                </div>
                                <div class="control">
                                    <a @click='signOut' v-bind:class="{hidden: !isActive}" class="button is-primary">ログアウト</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
</template>

<script>
    import { firebase } from '../../js/firebase'

    export default {
        name: "MyHeader",
        data: () => ({
            showNav: false,
            authUser: null,
            isActive: false
        }),
        created() {
            firebase.auth().onAuthStateChanged( user => {
                if(user) {
                    this.isActive = true;
                    console.log(`Logged in as: ${user.uid}`);
                }else {
                    this.isActive = false;
                    console.log('Nobady logged in');
                }
            })
        },
        methods: {
            signOut () {
                alert('ログアウトします。よろしいですか？');
                firebase.auth().signOut()
                    .then( () => {
                        firebase.auth().onAuthStateChanged( () => {
                            location.href = "/";
                        });
                    })
                    .catch(error => {
                        alert(error.message + 'm(_ _)m')
                    });
            }
        }
    }
</script>


<style scoped>
    header, nav { background: #f2f2f2;}
    .hWarapper { width: 1000px; margin: 0 auto;}
    .hidden { display: none; }
</style>