<template>
    <main v-if="sections && sections.length" class="home">

        <div
            v-for="(section, index) in sections"
            :key="section.id"
            class="section"
            :class="section.animation_image"
            :style="`background-color:${section.background_color};`"
        >
            <div class="container">
                <div class="row">
                    <div
                        class="align-self-center"
                        :class="index == 0 ? 'col-md-12 order-2' : 'col-md-7'"
                    >
                        <h3 class="title" :class="mobile ? 'mobile' : ''">
                            {{
                                $store.state.lang == 'ar'
                                    ? section.title_ar
                                    : section.title_en
                            }}
                        </h3>
                        <div
                            class="description"
                            v-html="
                                $store.state.lang == 'ar'
                                    ? section.description_ar
                                    : section.description_en
                            "
                        ></div>
                    </div>
                    <div
                        class="align-self-center"
                        :class="index == 0 ? 'col-md-12 order-1' : 'col-md-5'"
                    >
                        <img
                            :src="section.main_image"
                            alt="aboutusimg"
                            class="img-fluid"
                            :class="index == 0 ? 'first-img' : 'right-img'"
                        />
                    </div>
                </div>
            </div>
        </div>

<!--        <div v-for="section in sections" :key="section.id">-->
<!--            <div>-->

<!--                <h3>{{section.title.en}}</h3>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div id="socialShare" class="float my-float">-->
<!--            <div class="socialBox pointer">-->
<!--                <div class="socialToolBox" >-->
<!--                <span class="fa fa-share" style="   padding: 15px;-->
<!--    border-radius: 30px;-->
<!--    border: 5px solid black;-->
<!--color: rgb(244, 5, 71);-->
<!--    "></span>-->
<!--                </div>-->
<!--                <div id="socialGallery">-->
<!--                    <div class="socialToolBox" style="    margin-right: 25px;">-->
<!--                        <a class="facebook" :href="`https://www.facebook.com/sharer/sharer.php?u=https://www.demo.eightyythree.com`+this.$router.history.current.path" target="_blank" style="background-color: rgb(244 5 71);padding: 0px;"><i class="fa fa-facebook"  style="color: white"></i></a>-->
<!--                        <a class="instagram" :href="`https://instagram.com?https://www.demo.eightyythree.com`+this.$router.history.current.path" style="background-color: rgb(244 5 71);padding: 0px;" target="_blank"><i class="fa fa-instagram"  style="color: white"></i></a>-->
<!--                        <a class="twitter" :href="`https://twitter.com/intent/tweet?text=article_details&amp;url=https://www.demo.eightyythree.com`+this.$router.history.current.path" target="_blank"  style="background-color: rgb(244 5 71);padding: 0px;"><i class="fa fa-twitter"  style="color: white"></i></a>-->
<!--                        <a class="-whatsapp" :href="`https://www.linkedin.com/sharing/share-offsite/?url=https://www.demo.eightyythree.com`+this.$router.history.current.path" target="_blank" style="background-color: rgb(244 5 71);padding: 0px;"><i class="fa fa-linkedin" style="color: white" aria-hidden="true"></i></a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
        <foter></foter>
    </main>
</template>

<script>

import $ from "jquery";

export default {

    name: 'Home',
    data() {
        return {
            mobile: null,
            tap_title : null,
            sections:null
        }
    },
    created() {
        // sections() {
        //     return this.$store.getters.sections
        // },


            this.$store.commit('SET_LANG','ar')
            $('body').removeClass('ar')
            $('body').removeClass('en')
            $('body').addClass(this.$store.state.lang)

            this.$store.commit('sideMenuToggle',false)
            if (this.$store.state.menuToggle) {
                $('body').addClass('modal-open')
            } else {
                $('body').removeClass('modal-open')
            }

       this.all_sections()

    },
    mounted() {

        this.head();
        if (
            /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
                navigator.userAgent
            )
        ) {
            this.mobile = true
        } else {
            // false for not mobile device
            this.mobile = false
        }





    },

    methods: {
        strip(html) {
            const doc = new DOMParser().parseFromString(html, 'text/html')
            return doc.body.textContent || ''

        },
        async all_sections() {
            try{
                const res = await this.AxiosRequest("get" , "/api/sections");


                    this.sections = res.data;
                    console.log( this.sections);



            }
            catch(error){
                console.log("eror occured");
            }
        },
        head() {

            if(this.$store.state.lang == 'ar')
               document.title = "إيتي ثري للتسويق الرقمي  | الرئيسيه"
               else
                document.title = "EightyThree | Home"
   // does not work
            return {
                title:this.tap_title,
                meta: [
                    {
                        name: 'keywords',
                        hid: 'keywords',
                        content: '83 - EightyThree Company - The Key Of Creative  , ( نوفر لك مفاتيح لكل أقفالك المغلقة في التسويق والابداع والعلامة التجارية   - إيتي ثري للتسويق الرقمي '
                    },
                    { property: 'og:type', hid: 'og:type', content: 'other' },
                    { property: 'og:locale', hid: 'og:locale', content: 'ar-sa' },
                    {
                        property: 'og:locale:alternate',
                        hid: 'og:locale:alternate',
                        content: 'en-us'
                    },
                    {
                        property: 'og:locale:alternate',
                        hid: 'og:locale:alternate',
                        content: 'ar-sa'
                    },
                    {
                        property: 'og:url',
                        hid: 'og:url',
                        content: 'https://asol-tec.com'
                    },
                    {
                        name: 'twitter:title',
                        hid: 'twitter:title',
                        content: 'الصفحة الرئيسية'
                    },
                    {
                        name: 'twitter:site',
                        hid: 'twitter:site',
                        content: '@asol_tec'
                    }
                ],


                script: [


                ]

            }
        }
    },

}


</script>

<style lang="scss" scoped>
.body{
    font-family: "You-are-a-TOY";

}

.section:first-child {
    text-align: center;
    img {
        width: 180px;
    }
}
.section:last-child {
    .title.mobile {
        font-size: 48px;
    }
}
</style>
