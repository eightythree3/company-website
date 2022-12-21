

<template>
    <transition name="fade" mode="out-in">
        <div

           v-show="this.$store.state.menuToggle"
            class="side-menu"
            @click="sideToggle(false)"

        >
            <div class="content">
                <button class="close" @click.prevent="sideToggle(false)">
                    <span class="d-none">xx</span>
                </button>
                <div class="routers">
                    <ul class="list-unstyled" @click.stop>
                        <li v-if="this.$store.state.lang == 'en'">
                            <router-link to="/" >
                                Home
                            </router-link>


                        </li>

                        <li v-else="this.$store.state.lang == 'ar'">
                            <router-link to="/ar" >
                                الرئيسيه
                            </router-link>


                        </li>



                        <li v-if="this.$store.state.lang == 'ar' && this.$store.state.articles > 0">
                            <router-link to="/articles" >
                                المدونة
                            </router-link>


                        </li>


                        <li  v-if="this.$store.state.lang == 'en'" >
                            <router-link to="/services">
                                Services
                            </router-link>
                        </li>

                        <li  v-else="this.$store.state.lang == 'ar'" >
                            <router-link to="/services">
                                الخدمات
                            </router-link>
                        </li>


                        <li  v-if="this.$store.state.lang == 'en'" >
                            <router-link to="/contact">
                                Contact Us
                            </router-link>
                        </li>


                        <li  v-else="this.$store.state.lang == 'ar'" >
                            <router-link to="/contact">
                             تواصل معنا
                            </router-link>
                        </li>


                        <li   v-if="this.$store.state.lang == 'en'" >
                            <router-link to="/talk">
                                Lets Talk
                            </router-link>
                        </li>


                        <li   v-else="this.$store.state.lang == 'ar'" >
                            <router-link to="/talk">
                            لنتحدث
                            </router-link>
                        </li>

                        <li   v-if="this.$store.state.lang == 'en'" >
                            <router-link to="/project">
                                Project State
                            </router-link>
                        </li>



                        <li   v-else="this.$store.state.lang == 'ar'" >
                            <router-link to="/project">
                              حاله المشروع
                            </router-link>
                        </li>

                        <li class="mt-5">

                           <a v-if="this.$store.state.lang == 'en'" @click="changeLocale('ar')" style="cursor:pointer"> Arabic</a>
                            <a v-else="this.$store.state.lang == 'ar'" @click="changeLocale('en')" style="cursor:pointer">English</a>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </transition>
</template>
<script>
import $ from 'jquery'
export default {
    name: 'SideMenu',
    created() {
      this.all_articles();
    },
    computed: {
        availableLocales() {
            const local = this.$i18n.locales.filter(
                (i) => i.code !== this.$i18n.locale
            )
            const notInc = this.$i18n.locales.filter(
                (i) => i.code === this.$i18n.locale
            )
            this.$store.commit('SET_LANG', notInc[0].code)
            if (notInc) {
                $('body').removeClass('ar')
                $('body').removeClass('en')
                $('body').addClass(this.$store.state.lang)
            }

            return local
        }
    },
    watch: {
        $route() {
            if ($('body').hasClass('modal-open')) {
                this.sideToggle(false)
            }
        }
    },
    methods: {
        sideToggle(val) {
            this.$store.commit('sideMenuToggle', val)
            if (this.$store.state.menuToggle) {
                $('body').addClass('modal-open')
            } else {
                $('body').removeClass('modal-open')
            }
        },

        changeLocale(val){

            this.$store.commit('SET_LANG',val)
            $('body').removeClass('ar')
            $('body').removeClass('en')
                $('body').addClass(this.$store.state.lang)

            this.$store.commit('sideMenuToggle',false)
            if (this.$store.state.menuToggle) {
                $('body').addClass('modal-open')
            } else {
                $('body').removeClass('modal-open')
            }
        },
        async all_articles() {
            try{
                const res = await this.AxiosRequest("get" , "/api/articles");
                if(res.status == 200){

                    this.articles = res.data;
                    this.$store.commit('articles' , this.articles.length);
                    console.log( this.$store.state.articles);


                }
                else{
                    console.log("eror occured");
                }
            }
            catch(error){
                console.log("eror occured");
            }
        }
    }
}
</script>
<style lang="scss" scoped>
.side-menu {
    z-index: 999999;
    background: rgb(0, 0, 0, 85%);
    position: fixed;
    width: 100%;
    height: 100%;
    transition: 0.3s ease;
    .content {
        height: 100%;
        .routers {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            ul {
                text-align: center;
                a {
                    font-size: 48px;
                    color: #fff;
                }
            }
        }
    }
    .close {
        background-image: url('/img/svg/header.svg');
        width: 53px;
        height: 53px;
        background-color: transparent;
        border: none;
        position: absolute;
        top: 30px;
        right: 120px;
    }
}
</style>
