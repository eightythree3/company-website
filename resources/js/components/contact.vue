<template>
    <main class="contactus">
        <ContactUs></ContactUs>
        <ContactUsInfo></ContactUsInfo>
        <foter></foter>
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

<script>
export default {
    data(){
        return {
            tap_title:null,
            settings : null
        }
    },
    name: 'Contact',
   mounted() {
       if(this.$store.state.lang == 'ar'){
           document.title = "إيتي ثرى للتسويق الرقمي | تواصل معنا"

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
           document.title = 'EightyThree | Contact Us'
   },
    head() {
          if(this.$store.state.lang == 'ar')
            this.tap_title = "إيتي ثرى | تواصل معنا"
            else
            this.tap_title = 'EightyThree | Contact Us'
        return {
            title: this.tap_title,
            meta: [
                { name: 'keywords', content: 'contactus' },
                { property: 'article:published_time', content: '' },
                { property: 'og:type', content: 'other' },
                { property: 'og:title', content: 'Contact Us' }
            ]
        }
    }
}
</script>
