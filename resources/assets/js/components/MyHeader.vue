<template>
    <nav class="navbar is-light" role="navigation" aria-label="main navigation">
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
                        <a class="button is-primary" style="margin-right: 10px;">無料会員登録</a>
                        <a class="button is-primary">ログイン</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
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

</style>