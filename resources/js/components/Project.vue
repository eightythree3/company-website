<template>
    <main class="section project-state">
        <div class="content">
            <div class="container">
                <h2 v-if="this.$store.state.lang == 'en'" class="text-center title">
               Project State
                </h2>

                <h2 v-else="this.$store.state.lang == 'ar'" class="text-center title">
                  حالة المشروع
                </h2>

                <p v-if="this.$store.state.lang == 'en'" class="description text-center">
                 Just Scan code and manage your project
                    <br />
                </p>

                <p v-else="this.$store.state.lang == 'ar'" class="description text-center">
                    ما عليك سوى مسح الكود وإدارة مشروعك
                    <br />
                </p>
                <button
                    type="submit"
                    class="my-btn d-flex align-items-center justify-content-center"
                >
                    <img
                        src="/img/svg/qr-code.svg"
                        alt="qr-code"
                        class="img-fluid"
                        :class="$store.state.lang == 'ar' ? 'ml-2' : 'mr-2'"
                    />
                    <span v-if="this.$store.state.lang == 'en'">Scan Code</span>
                    <span v-else="this.$store.state.lang == 'ar'">مسح الكود</span>
                </button>
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
    </main>

</template>
<script >
export default {
    data(){
        return{
            tap_title:null
        }
    },
    name: 'ProjectState',
    created(){
        if(this.$store.state.lang == 'ar') {
            document.title = "إيتي ثرى للتسويق الرقمي | حاله المشروع"

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
            document.title = 'EightyThree | Project State'
    },
    mounted() {
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

}
</script>
<style lang="scss" scoped>
.project-state {
    height: 100vh;
    @media (max-width: 768px) {
        height: 100%;
        padding: 100px 0;
    }
    background-color: #cd3369;
    .content {
        height: 100%;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        .title {
            font-size: 62px;
            margin-bottom: 180px;
            @media (max-width: 768px) {
                margin-bottom: 40px;
            }
        }
    }
}
</style>
