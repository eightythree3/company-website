<template>
    <footer>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="footer-widget">
                            <h2 v-if="this.$store.state.lang == 'en'" class="footer-title">
                                Our Services
                            </h2>
                            <h2 v-else="this.$store.state.lang == 'ar'" class="footer-title">
                           خدمتنا
                            </h2>
                            <ul
                                v-if="
                                    this.$store.state.lang == 'en'
                                "
                                class="list-unstyled footer-list count-2"
                            >
                                <li
                                    v-for="service in services"
                                    :key="service.id"
                                >
                                     <router-link
                                        :to="`#`"
                                        >{{


                                                 service.title_en
                                        }}</router-link
                                    >
                                </li>
                            </ul>
                            <ul
                                v-else="this.$store.state.lang == 'ar'"
                                class="list-unstyled footer-list count-2"
                            >
                                <li
                                    v-for="service in services"
                                    :key="service.id"
                                >
                                    <router-link
                                        :to="`#`"
                                    >{{


                                            service.title_ar
                                        }}</router-link
                                    >
                                </li>
                            </ul>
                            <ul
                                v-else
                                class="list-unstyled footer-list count-2"
                            >
                                <li
                                    v-for="service in services"
                                    :key="service.id"
                                >
                                    <a
                                        :href="`#${service.slug}`"
                                        @click.prevent="scrollTo($event)"
                                        >{{ service.title }}</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="footer-widget">
                            <h2 v-if="this.$store.state.lang == 'en'" class="footer-title">Menu</h2>
                            <h2 v-else="this.$store.state.lang == 'ar'" class="footer-title">القائمة</h2>
                            <ul class="list-unstyled footer-list">
                                <li v-if="this.$store.state.lang == 'en'">
                                    <router-link to="/" >
                                        Home
                                    </router-link>


                                </li>

                                <li v-else="this.$store.state.lang == 'ar'">
                                    <router-link to="/" >
                                         الصفحه الرئيسية
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

                            </ul>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="footer-widget">
                            <h2 v-if="this.$store.state.lang == 'en'" class="footer-title">
                               contact
                            </h2>
                            <h2 v-else="this.$store.state.lang == 'ar'" class="footer-title">
                                اتصل بنا
                            </h2>
                            <ul
                                v-if="settings"
                                class="list-unstyled footer-list"
                            >
                                <li>
                                    <a
                                        :href="
                                            `mailto:${settings.site}`
                                        "
                                        v-text="
                                            settings.site || ''
                                        "
                                    ></a>
                                </li>
                                <li>
                                    <a
                                        :href="
                                            `tel:${settings.phone}`
                                        "
                                        v-text="
                                           settings.phone || ''
                                        "
                                        ></a
                                    >
                                </li>
                            </ul>
                            <ul
                                v-if="settings"
                                class="list-unstyled social-icons d-flex align-items-center mt-5"
                            >
                                <li class="instagram">
                                    <a
                                        target="_blank"
                                        :href="
                                            settings
                                                .intgram || '#'
                                        "
                                    >
                                        <img
                                            src="/img/svg/instagram.svg"
                                            alt="instagram"
                                            class="img-fluid"
                                        />
                                    </a>
                                </li>
                                <li class="facebook">
                                    <a
                                        target="_blank"
                                        :href="
                                            settings
                                                .facebook || '#'
                                        "
                                    >
                                        <img
                                            src="/img/svg/facebook.svg"
                                            alt="facebook"
                                            class="img-fluid"
                                        />
                                    </a>
                                </li>
                                <li class="twitter">
                                    <a
                                        target="_blank"
                                        :href="
                                            settings
                                                .twitter || '#'
                                        "
                                    >
                                        <img
                                            src="/img/svg/twitter.svg"
                                            alt="twitter"
                                            class="img-fluid"
                                        />
                                    </a>
                                </li>
                                <li class="youtube">
                                    <a
                                        target="_blank"
                                        :href="
                                          settings
                                                .linkedin || '#'
                                        "
                                    >
                                        <img
                                            src="/img/svg/linkedin.svg"
                                            alt="youtube"
                                            class="img-fluid"
                                            width="25px"
                                            height="25px"
                                        />
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="text-center"> company al-mukhallaf for commercail services</div>
            </div>
        </div>
        <div v-if="settings" class="copyright text-center">
<!--            {{-->
<!--                $store.state.lang == 'ar'-->
<!--                    ? this.$store.state.settings.copyright.ar || ''-->
<!--                    : this.$store.state.settings.copyright.en || ''-->
<!--            }}-->
        </div>
    </footer>
</template>

<script>
export default {
    name: 'Footer',
    data(){
        return {

            services : [],
            settings : [],
            mobile: null
        }
    },
    created() {
        this.all_services();
        this.all_settings();
    },
    methods: {
        scrollTo(e) {
            const id = e.target.getAttribute('href')
            const el = document.querySelector(id)
            if (el) {
                window.scroll({
                    top:
                        el.offsetTop -
                        document.querySelector('.navbar').offsetHeight,
                    behavior: 'smooth'
                })
            }
        },

        async all_services() {
            try{
                const res = await this.AxiosRequest("get" , "/api/services");
                if(res.status == 200){

                    this.services = res.data;
                    console.log( this.services);


                }
                else{
                    console.log("eror occured");
                }
            }
            catch(error){
                console.log("eror occured");
            }
        },
        async all_settings() {
            try{
                const res = await this.AxiosRequest("get" , "/api/settings");
                if(res.status == 200){

                    this.settings = res.data;
                    console.log( this.settings.linkedin);


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
footer {
    position: relative;
    z-index: 9;
}
.footer {
    z-index: 999;
    background-color: #384a89;
    background-image: url('/img/Particles.png');
    background-attachment: fixed;
    padding: 50px 0;
    .footer-widget {
        .footer-title {
            font-size: 22px;
            @media (max-width: 768px) {
                font-size: 38px;
            }
        }
        li {
            font-size: 26px;
            a {
                color: #fff;
                &:hover {
                    color: #ffff00;
                }
            }
        }
        .footer-list {
            &.count-2 {
                column-count: 2;
            }
        }
        .social-icons {
            li {
                a {
                    padding: 0 30px 0 0;
                }
            }
        }
    }
}
.copyright {
    background-color: #46568d;
    background-image: url('/img/Particles.png');
    background-attachment: fixed;

    font-size: 28px;
}
</style>
