<template>
    <nav class="navbar is-light" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="/">
                <img src="" alt="GourSearch" width="112" height="28">
            </a>

            <div class="navbar-burger burger" data-target="navbarMenu" @click="showNav = !showNav" :class="{'is-active': showNav}">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </div>
        </div>
        <div id="navbarExampleTransparentExample" class="navbar-menu" :class="{'is-active':showNav}">
            <div class="navbar-end">
                <a href="/" v-for="item in items" :key="item.title" class="navbar-item">{{ item.title }}</a>
            </div>
        </div>
    </nav>
</template>

<script>
    export default {
        name: "MyHeader",
        data: () => ({
            showNav: false,
            items: [
                { title: 'Home', icon: 'home' },
                { title: 'Place', icon: 'place' },
                { title: 'Menu', icon: 'menu' }
            ]
        })
    }
</script>

<style scoped>
/**/
</style>