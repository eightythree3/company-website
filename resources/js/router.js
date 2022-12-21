import Vue from 'vue';
import Router from 'vue-router';
import homeComponent from './components/index';
import servicesComponent from './components/services';
import talkComponent from './components/talk';
import contactComponent from './components/contact';
import projectComponent from './components/project';
import articlesComponent from './components/articles';
import articleDetailsComponent from './components/articleDetails';
import notFoundComponent from './components/notFoundComponent';
import i18n from './vue-i18n-locales.generated';
Vue.use(Router);

const routes = [

    {
      path: '*',
      component: notFoundComponent
    },


    {
        path: '/',
        component: homeComponent
    },



    {
        path: '/ar',
        component: homeComponent
    },

            {
                path: '/talk',
                component: talkComponent
            },

            {
                path: '/services',
                component: servicesComponent
            }
            ,
            {
                path: '/contact',
                component: contactComponent
            },
            {
                path: '/project',
                component: projectComponent
            },
            {
                path: '/articles',
                component: articlesComponent
            },
    {
        path: '/article/details/:id',
        component: articleDetailsComponent
    }





]

export default new Router({

    routes
})
