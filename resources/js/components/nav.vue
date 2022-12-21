<template>
    <nav class="navbar">
        <div class="container">
            <div
                class="d-flex align-items-center justify-content-between w-100"
            >
                <h1 class="logo">
                    <router-link to="/">
                        <img src="/img/logo.png" alt="Logo" class="img-fluid"
                    /></router-link>
                </h1>
                <button class="menu-btn" @click.prevent="sideToggle(true)">
                    <span class="d-none"><menu type="context"></menu></span>
                </button>
            </div>
        </div>
    </nav>
</template>

<script>
import $ from 'jquery'
export default {
    name: 'Navbar',
    mounted() {
        const nav = $('.navbar')
        $(window).on('scroll', function() {
            if (window.pageYOffset > nav.innerHeight()) {
                nav.addClass('active')
            } else {
                nav.removeClass('active')
            }
        })



    },
    methods: {
        sideToggle(val) {
            this.$store.commit('sideMenuToggle', val)
            if (this.$store.state.menuToggle) {
                $('body').addClass('modal-open')
            } else {
                $('body').removeClass('modal-open')
            }
        }
    }
}
</script>
<style lang="scss" scoped>
.navbar {
    background-color: transparent;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 99;
    &.active {
        background-color: rgb(0, 0, 0, 0.22);
    }
    .logo {
        font-size: 48px;
        font-weight: bold;
        margin: 0;
        max-width: 60px;
        a {
            color: #fff;
        }
    }
    .menu-btn {
        background-image: url('/img/svg/menu.svg');
        background-color: transparent;
        border: none;
        width: 53px;
        height: 53px;
    }
}
</style>
