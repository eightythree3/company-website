/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import Vue from 'vue';
import router from './router';
import store from "./store/index";
import common from "./common";
import VueInternationalization from 'vue-i18n';
import Locale from './vue-i18n-locales.generated';
Vue.mixin(common);
Vue.use(VueInternationalization);
// window.Vue = Vue;

const lang = document.documentElement.lang.substr(0, 2);
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('navbar', require('./components/nav.vue').default);
Vue.component('sidebar', require('./components/sidebar.vue').default);
Vue.component('foter', require('./components/footer.vue').default);
Vue.component('services', require('./components/services.vue').default);
Vue.component('contact', require('./components/contact.vue').default);
Vue.component('ContactUs', require('./components/ContactUs.vue').default);
Vue.component('ContactUsInfo', require('./components/ContactUsInfo.vue').default);
Vue.component('Project', require('./components/Project.vue').default);
Vue.component('index', require('./components/index.vue').default);
Vue.component('articles', require('./components/articles.vue').default);
Vue.component('articles_details', require('./components/articleDetails.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


const i18n = new VueInternationalization({
    locale: lang,
    messages: Locale
});


router.beforeEach((to , from , next) => {
    let language = to.params.lang;
    if(!language){
        language : 'ar'
    }

    i18n.locale = language
    next()
})


const app = new Vue({
    el: '#app',
    router,
    store,
    i18n,
});
