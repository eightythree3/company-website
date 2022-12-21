<template>
    <main class="services">
        <header>
            <h2 v-if="this.$store.state.lang == 'en'" class="title text-center">services</h2>
            <h2 v-else="this.$store.state.lang == 'ar'" class="title text-center">الخدمات</h2>
        </header>
        <div class="sections" v-if="services != ''" >

                <div
                  v-for="service in services"  :key="service.id" :id="`${service.slug}`"  :service="service"
                        class="service"
                        :style="`background-color:${service.background_color}`"
                    :class="mobile ? 'mobile' : ''"

                        >
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7 align-self-center">
                                    <h3 v-if="service.title" class="title">
                                        {{
                                            $store.state.lang == 'ar'
                                                ? service.title_ar
                                                : service.title_en
                                        }}
                                    </h3>
                                    <div
                                        class="service-list"
                                        v-html="
                                            $store.state.lang == 'ar'
                                                ? service.description_ar
                                                : service.description_en
                                        "
                                    ></div>
                                </div>
                                <div class="col-md-5 text-right align-self-center">
                                    <img
                                        :src="service.main_image"
                                        :alt="service.image"
                                        class="img-fluid right-img"
                                    />
                                </div>
                            </div>
                        </div>
            </div>


        </div>

        <div v-else><h3 class="container">no services found</h3></div>
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
export default {
    data(){
        return {
          tap_title : null,
          services : [],
           mobile: null
        }
    },
    name: 'Services',

    created() {
      this.all_services();
    },
    mounted() {
        this.scrollIntoElement();
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

        if(this.$store.state.lang == 'ar') {
            document.title = "إيتي ثري للتسويق الرقمي  | الخدمات"
            $('body').removeClass('ar')
            $('body').removeClass('en')
            $('body').addClass(this.$store.state.lang)

            this.$store.commit('sideMenuToggle', false)
            if (this.$store.state.menuToggle) {
                $('body').addClass('modal-open')
            } else {
                $('body').removeClass('modal-open')
            }
        }
        else
            document.title = "EightyThree | Services"
    },
    methods: {
        scrollIntoElement() {
            if (this.$route.hash) {
                const el = document.querySelector(this.$route.hash)
                if (el) {
                    window.scroll({
                        top:
                            el.getBoundingClientRect().top -
                            document.querySelector('.navbar').offsetHeight,
                        behavior: 'smooth'
                    })
                }
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
        }
    },

}
</script>
<style lang="scss" scoped>
.services {
    background-color: #ebd13f;
    height: 100%;
    .title {
        padding: 100px 0 50px;
    }
}
</style>


<style lang="scss" scoped>
.service {
    height: 100%;
    padding: 70px 0;
    background-image: url('/img/Particles.png');
    background-attachment: fixed;
    overflow: hidden;
    transition: all 500ms ease;
    &.mobile {
        .title {
            font-size: 62px;
        }
    }
    .title {
        //font-size: 96px;

        transition: all 500ms ease;
    }
    .service-list {
        height: 0;
        max-height: 0px;
        opacity: 0;
        transition: all 500ms ease;
        overflow: hidden;
        li {
            font-size: 24px;
        }
    }
    img.right-img {
        transition: all 500ms ease;
    }
    &:hover {
        img.right-img {
            transform: scale(1.2) rotate(10deg);
        }
        .title {
            font-size: 48px;
        }
        .service-list {
            max-height: 550px;
            height: 100%;
            opacity: 1;
            visibility: visible;
        }
    }
}
</style>
