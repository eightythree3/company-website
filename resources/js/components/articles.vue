<template>
    <main class="services" style="background-color:whitesmoke" >
        <header>
            <h2 class="title text-center" style="background-color: rgb(70, 86, 141);   color:white">المدونة</h2>
        </header>
        <div class="sections service " >

<div class="container">
    <div class="row ">
        <div class="col-lg-4 col-md-6 col-sm-12"  v-for="article in articles" :key="article.id">
            <div class="card mb-2">
                <img class=""
                     :src="article.image" alt="Card image cap" style="width: auto;
    height: 250px;border-radius: 15px;">
                <div class="card-body" style="text-align: right">
                    <h4 class="card-title">{{ article.title_ar }}</h4>
                    <p class="card-text" style="text-align: justify">{{article.description_ar.substring(0,50) + "...." }} </p>
                    <router-link class="btn btn-info btn-block" style="color:white;height: 50px;background-color: rgb(70, 86, 141);
    padding-top: 12px;" :to="'/article/details/'+article.id" >قراءه المزيد</router-link>
                </div>
            </div>
        </div>
         <hr>
    </div>
</div>





        </div>

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
            articles : [],
            mobile: null
        }
    },
    name: 'Services',

    created() {
        this.all_articles();
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

        if(this.$store.state.lang == 'ar')
            document.title = "إيتي ثري للتسويق الرقمي  | المدونة"
        else
            document.title = "EightyThree | Article"
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
    },

}
</script>
<style lang="scss" scoped>
*{
    color: black
}
.services {

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
