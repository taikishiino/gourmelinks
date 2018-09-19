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
                                    <a class="button is-primary">無料会員登録</a>
                                </div>
                                <div class="control">
                                    <a class="button is-primary">ログイン</a>
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
    export default {
        name: "MyHeader",
        data: () => ({
            showNav: false
        })
    }
</script>

<style scoped>
    header, nav { background: #f2f2f2;}
    .hWarapper { width: 1000px; margin: 0 auto;}
</style>