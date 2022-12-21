
import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex);


export default new Vuex.Store({

    state : {
        menuToggle: false,
        pages: null,
        settings: null,
        lang: 'ar',
        articles: 0
    },
    placeholders : {
        name : "Name",
        company : "My Company",
        country : "Country",
        city : 'City',
        email : "Email",
        phone : "Phone",
        message : "Leave Your Message"
    },
    getters : {
        getTodoById: (state) => (id) => {
            return state.todos.find((todo) => todo.id === id)
        },
        sections: (state) => {
            if (state.pages) {
                return state.pages.filter((el) => {
                    return el.type === 'page'
                })
            }
        },
        // services: (state) => {
        //     if (state.pages) {
        //         return state.pages.filter((el) => {
        //             return el.type === 'service'
        //         })
        //     }
        // }
     },
    mutations:{
        sideMenuToggle(state, status) {
            state.menuToggle = status
        },
        settings(state, status) {
            state.settings = status
        },
        pages(state, status) {
            state.pages = status
        },
        articles(state, status) {
            state.articles = status
        },
        SET_LANG(state, lang) {
            state.lang = lang
        }
    }

})
