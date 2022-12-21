
<template>

    <main class="section lets-talk" :style="mobile ? 'height:100vh;' : ''">

        <div class="content">
            <div class="container">
                <h2 v-if="this.$store.state.lang == 'en'" class="text-center title">
                    <!-- {{ $t('links.lets_talk.title') }} -->
                    Let's Talk
                </h2>

                <h2 v-else="this.$store.state.lang == 'ar'" class="text-center title">
                    <!-- {{ $t('links.lets_talk.title') }} -->
                  لنتحدث
                </h2>

                <form>
                    <div v-if="this.$store.state.lang == 'en'" class="form-group">
                        <input
                            v-model="form.name"
                            type="text"
                            class="form-control"
                            placeholder="Name"
                        />
                        <div v-if="errors.name" class="error-feedback">
                            {{ errors.namea }}
                        </div>
                    </div>

                    <div v-else="this.$store.state.lang == 'ar'" class="form-group">
                        <input
                            v-model="form.name"
                            type="text"
                            class="form-control"
                            placeholder="الإسم"
                        />
                        <div v-if="errors.name" class="error-feedback">
                            {{ errors.name }}
                        </div>
                    </div>


                    <div v-if="this.$store.state.lang == 'en'" class="form-group">
                        <input
                            v-model="form.company"
                            type="text"
                            class="form-control"
                            placeholder="My Company"
                        />
                        <div v-if="errors.company" class="error-feedback">
                            {{ errors.company }}
                        </div>
                    </div>


                    <div v-else="this.$store.state.lang == 'ar'" class="form-group">
                        <input
                            v-model="form.company"
                            type="text"
                            class="form-control"
                            placeholder="الشركة"
                        />
                        <div v-if="errors.company" class="error-feedback">
                            {{ errors.company }}
                        </div>
                    </div>


                    <div v-if="this.$store.state.lang == 'en'" class="form-group">
                        <input
                            v-model="form.country"
                            type="text"
                            class="form-control"
                            placeholder="Country"
                        />
                        <div v-if="errors.country" class="error-feedback">
                            {{ errors.country }}
                        </div>
                    </div>

                    <div v-else="this.$store.state.lang == 'ar'" class="form-group">
                        <input
                            v-model="form.country"
                            type="text"
                            class="form-control"
                            placeholder="البلد"
                        />
                        <div v-if="errors.country" class="error-feedback">
                            {{ errors.country }}
                        </div>
                    </div>

                    <div  v-if="this.$store.state.lang == 'en'" class="form-group">
                        <input
                            v-model="form.city"
                            type="text"
                            class="form-control"
                            placeholder="City"
                        />
                        <div v-if="errors.city" class="error-feedback">
                            {{ errors.city }}
                        </div>
                    </div>

                    <div  v-else="this.$store.state.lang == 'ar'" class="form-group">
                        <input
                            v-model="form.city"
                            type="text"
                            class="form-control"
                            placeholder="المدينة"
                        />
                        <div v-if="errors.city" class="error-feedback">
                            {{ errors.city }}
                        </div>
                    </div>

                    <div  v-if="this.$store.state.lang == 'en'"  class="form-group">
                        <input
                            v-model="form.email"
                            type="email"
                            class="form-control"
                            placeholder="Email"
                        />
                        <div v-if="errors.email" class="error-feedback">
                            {{ errors.email }}
                        </div>
                    </div>

                    <div  v-else="this.$store.state.lang == 'ar'"  class="form-group">
                        <input
                            v-model="form.email"
                            type="email"
                            class="form-control"
                            placeholder="البريد الإلكترونى"
                        />
                        <div v-if="errors.email" class="error-feedback">
                            {{ errors.email }}
                        </div>
                    </div>

                    <div v-if="this.$store.state.lang == 'en'" class="form-group">
                        <input
                            v-model="form.phone"
                            type="number"
                            class="form-control"
                            placeholder="Phone"
                        />
                        <div v-if="errors.phone" class="error-feedback">
                            {{ errors.phone }}
                        </div>
                    </div>

                    <div v-else="this.$store.state.lang == 'ar'" class="form-group">
                        <input
                            v-model="form.phone"
                            type="number"
                            class="form-control"
                            placeholder="رقم التواصل"
                        />
                        <div v-if="errors.phone" class="error-feedback">
                            {{ errors.phone }}
                        </div>
                    </div>

                    <div v-if="this.$store.state.lang == 'en'" class="form-group">
                        <textarea
                            v-model="form.message"
                            class="form-control"
                            rows="6"
                            placeholder="Leave Your Message"
                        ></textarea>
                        <div v-if="errors.message" class="error-feedback">
                            {{ errors.message }}
                        </div>
                    </div>

                    <div v-else="this.$store.state.lang == 'ar'" class="form-group">
                        <textarea
                            v-model="form.message"
                            class="form-control"
                            rows="6"
                            placeholder="أترك رسالتك هنا"
                        ></textarea>
                        <div v-if="errors.message" class="error-feedback">
                            {{ errors.message }}
                        </div>
                    </div>

                    <div
                        v-if="sucss"
                        class="alert alert-success text-center"
                        role="alert"
                    >
                        {{ sucssMessage }}
                    </div>
                    <button v-if="this.$store.state.lang == 'en'"
                        type="submit"
                        class="my-btn"
                        @click.prevent="formRequest"
                    >
                      SEND
                    </button>

                    <button v-else="this.$store.state.lang == 'ar'"
                            type="submit"
                            class="my-btn"
                            @click.prevent="formRequest"
                    >
                        إرسال
                    </button>
                </form>

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
<script>
import axios from 'axios'
export default {
    name: 'LetsTalk',
    data() {
        return {
            mobile: null,
            form: {
                name: '',
                email: '',
                company: '',
                country: '',
                city: '',
                phone: '',
                message: '',
                tap_title:null
            },
            sucssMessage: '',
            errorMessage: '',
            errors: {},
            sucss: false
        }
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

        if(this.$store.state.lang == 'ar'){
            document.title = "إيتي ثرى للتسويق الرقمي | لنتحدث"
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
            document.title = 'EightyThree | Lets Talk'
    },
    methods: {
        formRequest() {
            var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
            if(this.$store.state.lang == "en")
                this.sucssMessage = "your request sent successfully";
            else
                  this.sucssMessage =   "تم إرسال طلبك بنجاح";
                if (this.form.name == '') {
                    this.errors = {"name": "من فضلك أدخل الإسم"};
                }
                 else if(this.form.email == '' ){
                    this.errors =  {"email" : "من فضلك أدخل البريد الإلكترونى"};




                }else  if (!this.form.email.match(validRegex))
                    this.errors =  {"email" : "من فضلك أدخل البريد الإلكترونى بصورة صحيحة"};

                else if(this.form.phone == ''){
                    this.errors =  {"phone" : "من فضلك أدخل رقم الجوال"};
                }
                else if(this.form.message == ''){
                    this.errors =  {"message" : "من فضلك أدخل الرسالة"};
                }

            else{
                axios
                    .post('/api/contact', this.form, {
                        headers: {
                            lang: this.$store.state.lang
                        }
                    })
                    .then((response) => {
                        this.errors = {}
                        this.errorMessage = ''
                        this.sucss = true
                        this.form.name = ''
                        this.form.email = ''
                        this.form.company = ''
                        this.form.country = ''
                        this.form.city = ''
                        this.form.phone = ''
                        this.form.message = ''
                    })
                    .catch((error) => {
                        this.errors = error.response.data.errors
                        this.errorMessage = "عفوا هناك خطأ حدث"
                        this.sucssMessage = ''
                        this.sucss = false
                    })
            }

        }
    },
    head() {
          if(this.$store.state.lang == 'ar')
            this.tap_title = "إيتي ثرى | لنتحدث"
            else
            this.tap_title = 'EightyThree | Lets Talk'
        return {
            title: this.tap_title
        }
    }
}
</script>
<style lang="scss" scoped>
body{

}
.lets-talk {
    height: 100%;
    padding: 100px 0;

    .content {
        height: 100%;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        .title {
            font-size: 62px;
        }
        input,
        textarea {
            font-size: 28px;
        }
        input {
            border-radius: 50px;
            padding: 10px 30px;
        }
        .error-feedback {
            padding: 10px 30px 0;
            font-size: 22px;
            color:#ffc9e9;
        }
        textarea {
            border-radius: 20px;
            padding: 20px 30px;
        }
    }
}
</style>
