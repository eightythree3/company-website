<style>


h2 {
    font-weight: 900
}

.container-fluid {
    max-width: 1200px
}

.card {
    background: #fff;
    box-shadow: 0 6px 10px rgba(0, 0, 0, .08), 0 0 6px rgba(0, 0, 0, .05);
    transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12);
    border: 0;
    border-radius: 1rem
}

.card-img,
.card-img-top {
    border-top-left-radius: calc(1rem - 1px);
    border-top-right-radius: calc(1rem - 1px)
}

.card h5 {
    overflow: hidden;
    height: 56px;
    font-weight: 900;
    font-size: 1rem
}

.card-img-top {
    width: 100%;

    object-fit: contain;
    padding: 30px
}

.card h2 {
    font-size: 1rem
}

.card:hover {
    transform: scale(1.05);
    box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .06)
}

.label-top {
    position: absolute;
    background-color: #8bc34a;
    color: #fff;
    top: 8px;
    right: 8px;
    padding: 5px 10px 5px 10px;
    font-size: .7rem;
    font-weight: 600;
    border-radius: 3px;
    text-transform: uppercase
}

.top-right {
    position: absolute;
    top: 24px;
    left: 24px;
    width: 90px;
    height: 90px;
    border-radius: 50%;
    font-size: 1rem;
    font-weight: 900;
    background: #ff5722;
    line-height: 90px;
    text-align: center;
    color: white
}

.top-right span {
    display: inline-block;
    vertical-align: middle
}

@media (max-width: 768px) {
    .card-img-top {
        max-height: 250px
    }
}

.over-bg {
    background: rgba(53, 53, 53, 0.85);
    box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
    backdrop-filter: blur(0.0px);
    -webkit-backdrop-filter: blur(0.0px);
    border-radius: 10px
}

.btn {
    font-size: 1rem;
    font-weight: 500;
    text-transform: uppercase;
    padding: 5px 50px 5px 50px
}

.box .btn {
    font-size: 1.5rem
}

@media (max-width: 1025px) {
    .btn {
        padding: 5px 40px 5px 40px
    }
}

@media (max-width: 250px) {
    .btn {
        padding: 5px 30px 5px 30px
    }
}

.btn-warning {
    background: none #f7810a;
    color: #ffffff;
    fill: #ffffff;
    border: none;
    text-decoration: none;
    outline: 0;
    box-shadow: -1px 6px 19px rgba(247, 129, 10, 0.25);
    border-radius: 100px
}

.btn-warning:hover {
    background: none #ff962b;
    color: #ffffff;
    box-shadow: -1px 6px 13px rgba(255, 150, 43, 0.35)
}

.bg-success {
    font-size: 1rem;
    background-color: #f7810a !important
}

.bg-danger {
    font-size: 1rem
}

.price-hp {
    font-size: 1rem;
    font-weight: 600;
    color: darkgray
}

.amz-hp {
    font-size: .7rem;
    font-weight: 600;
    color: darkgray
}

.fa-question-circle:before {
    color: darkgray
}

.fa-plus:before {
    color: darkgray
}

.box {
    border-radius: 1rem;
    background: #fff;
    box-shadow: 0 6px 10px rgb(0 0 0 / 8%), 0 0 6px rgb(0 0 0 / 5%);
    transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12)
}

.box-img {
    max-width: 300px
}

.thumb-sec {
    max-width: 300px
}

@media (max-width: 576px) {
    .box-img {
        max-width: 200px
    }

    .thumb-sec {
        max-width: 200px
    }
}

.inner-gallery {
    width: 60px;
    height: 60px;
    border: 1px solid #ddd;
    border-radius: 3px;
    margin: 1px;
    display: inline-block;
    overflow: hidden;
    -o-object-fit: cover;
    object-fit: cover
}

@media (max-width: 370px) {
    .box .btn {
        padding: 5px 40px 5px 40px;
        font-size: 1rem
    }
}

.disclaimer {
    font-size: .9rem;
    color: darkgray
}

.related h3 {
    font-weight: 900
}

.date {
    font-size: 11px
}

.comment-text {
    font-size: 12px
}

.fs-12 {
    font-size: 12px
}

.shadow-none {
    box-shadow: none
}

.name {
    color: #007bff
}

.cursor:hover {
    color: blue
}

.cursor {
    cursor: pointer
}

.textarea {
    resize: none
}

.fa-facebook {
    color: #3b5999
}

.fa-twitter {
    color: #55acee
}

.fa-linkedin {
    color: #0077B5
}

.fa-instagram {
    color: #e4405f
}

.fa-dribbble {
    color: #ea4c89
}

.fa-pinterest {
    color: #bd081c
}

.fa {
    cursor: pointer
}



.badge {
    padding: 7px;
    padding-right: 9px;
    padding-left: 16px;
    box-shadow: 5px 6px 6px 2px #e9ecef
}

.user-img {
    margin-top: 4px
}

.check-icon {
    font-size: 17px;
    color: #c3bfbf;
    top: 1px;
    position: relative;
    margin-left: 3px
}

.form-check-input {
    margin-top: 6px;
    margin-left: -24px !important;
    cursor: pointer
}

.form-check-input:focus {
    box-shadow: none
}

.icons i {
    margin-left: 8px
}

.reply {
    margin-left: 12px
}

.reply small {
    color: #b7b4b4
}

.reply small:hover {
    color: green;
    cursor: pointer
}

</style>

<template>
    <main class="services" style="background-color:whitesmoke">
        <header>
            <h2 class="title text-center" style="   background-color: rgb(70, 86, 141);color:white">{{ article.title_ar }} </h2>
        </header>

        <div class="sections service "   >



                            <div class=" mb-2 container">
                                <img class="card-img-top container"
                                     :src="article.image" alt="Card image cap " style="

    margin: auto 50px;
    float: right;">
                                <div class="card-body" style="text-align: center">
                                    <h4 class="card-title" style="font-size: 35px;">{{ article.title_ar }}</h4>
                                    <p class="card-text container" style="text-align: justify;">{{article.description_ar}}.</p>
                                </div>
                                <h5></h5>

                                <div class="container ">
                                    <div class="row"  >
                                        <div class="col-md-6 text-center" v-for="keyword in article.keywords">

                                            <a type="button" class="btn btn-light " style="background-color: #d3d3d3a3;width: 300px;color: gray;">{{ keyword.substring(0,20) }}</a>
                                        </div>
                                    </div>



                                </div>

                            </div>
<br>
<hr>
            <div
                v-if="warning"
                class="alert alert-success text-center container"
                role="alert"
                id="comment_warn"
            >
                تم إضافه تعليقكم وسيتم عرضة عند الموافقة عليه
            </div>

            <br>
            <div
                v-if="error"
                class="alert alert-danger text-center container"
                role="alert"
                id="comment_error"
            >
                يرجى كتابه التعليق اولا
            </div>
            <div class="d-flex justify-content-center row">
                <div class="col-md-8">
                    <div class="d-flex flex-column comment-section" id="myGroup">

                        <div class=" p-2">
                            <div class="d-flex flex-row fs-12" style="
    font-size: 28px;
    float: right;
">
                                <!--                                <div class="like p-2 cursor"><i class="fa fa-thumbs-o-up"></i><span class="ml-1">إعجاب</span></div>-->
                                <div class="like p-2 cursor action-collapse" data-toggle="collapse" aria-expanded="true" aria-controls="collapse-1" href="#collapse-1"><i class="fa fa-commenting-o"></i><span class="ml-1" >إضافه تعليق</span></div>
                                <!--                                <div class="like p-2 cursor action-collapse" data-toggle="collapse" aria-expanded="true" aria-controls="collapse-2" href="#collapse-2"><i class="fa fa-share"></i><span class="ml-1">مشاركه</span></div>-->
                            </div>
                        </div>

                            <div class="d-flex flex-row align-items-start" style="height:20px">
                                <!--                                                    <img class="rounded-circle" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/29/Comment_alt_font_awesome.svg/1200px-Comment_alt_font_awesome.svg.png" width="40">-->


                                <textarea class="form-control ml-1 shadow-none textarea" name="comment" v-model="form.comment"></textarea><br>
                                <button class="btn btn-info" @click="commentfunc" style="color: whitesmoke;height: 62px;">إرسال</button>

                            </div>

                        <div
                            v-if="sucss"
                            class="alert alert-success text-center"
                            role="alert"
                        >
                            تم إرسال تعليقك بنجاح
                        </div>


                        <div id="collapse-2" class="bg-light p-2 collapse" data-parent="#myGroup">
                            <div class="d-flex flex-row align-items-start"><i class="fa fa-facebook border p-3 rounded mr-1"></i><i class="fa fa-twitter border p-3 rounded mr-1"></i><i class="fa fa-linkedin border p-3 rounded mr-1"></i><i class="fa fa-instagram border p-3 rounded mr-1"></i><i class="fa fa-dribbble border p-3 rounded mr-1"></i> <i class="fa fa-pinterest-p border p-3 rounded mr-1"></i> </div>
                        </div>
                    </div>
                </div>
            </div>


<br>


            <div class="container mt-5" style="    width: 900px;">



                <div class="">
                    <div class="">
                        <div class="headings d-flex justify-content-between align-items-center mb-3" style="float:right">
                            <h5 > التعليقات ({{comments.length}})</h5>
                            </div>

                        </div>
                        <div class="card p-3 container-fluid" style="margin: 10px" v-for="comment in comments" :key="comment.id">

                            <div class="d-flex justify-content-between align-items-center">
                                <div class="user d-flex flex-row align-items-center"> <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/29/Comment_alt_font_awesome.svg/1200px-Comment_alt_font_awesome.svg.png" width="30" class="user-img rounded-circle mr-2">
<!--                                    <span><small class="font-weight-bold text-primary">james_olesenn</small>-->


<!--                                    </span>-->
                                    <span>  <small class="font-weight-bold" style="padding-right: 15px">{{ comment.comment }}</small></span>

                                </div>


<!--                                <small></small>-->
                            </div>
<!--                            <div class="action d-flex justify-content-between mt-2 align-items-center">-->
<!--                                <div class="icons align-items-center"> <i class="fa fa-star text-warning"></i> <i class="fa fa-check-circle-o check-icon"></i> </div>-->
<!--                            </div>-->
                        </div>


                    </div>
                </div>

            </div>

            <br>

        <div class="product-filter-icons text-center">
            <a :href="'https://www.facebook.com/sharer/sharer.php?u=https://www.eightyythree.com/#/article/details/'+this.$route.params.id" target="_blank" class=""><img src="/img/svg/facebook2.svg" width="35px" height="35px"></a>
<!--            <a :href="'mailto:user@domain.com?Subject=Hello%20User?url=https://www.kafaat22.com/course-details/'+this.$route.params.id" target="_blank" class=""><img src="https://www.kafaat22.com/uploads/social/g.png" width="35px" height="35px"></a>-->
            <a :href="'https://twitter.com/intent/tweet?text=article_details&amp;url=https://www.eightyythree.com/#/article/details/'+this.$route.params.id" target="_blank" class=""><img src="/img/svg/twitter2.svg" width="35px" height="35px"></a>
            <a :href="'https://instagram.com?url=https://www.eightyythree.com/#/article/details/'+this.$route.params.id" target="_blank" class=""><img src="/img/svg/instagram2.svg" width="35px" height="35px"></a>
            <a :href="`https://wa.me/+966552389207/?text=http://localhost:8000/ar/article/details/`+this.$route.params.id" target="_blank" class=""><img src="/img/svg/whatsapp2.svg" width="35px" height="35px"></a>

<!--            <a href="#" target="_blank" class="" style="width: 25px"><img src="https://www.kafaat22.com/assets/images/telegram.svg" width="35px" height="35px"></a>-->

        </div>
            <div class="container">

                <h5 style="float:right;font-family: system-ui;">مقالات قد تعجبك</h5>

            </div>

            <div class="container-fluid bg-trasparent my-4 p-3" style="position: relative;">
                <hr>
                <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
                    <div class="col" v-for="related in relates" :key="related.id" @click="get_article_related(related.id)">

                        <div class="card h-100 shadow-sm"> <img :src="related.image" style="
    height: 250px;" class="card-img-top" alt="...">
                            <div class="card-body" style="text-align: center;color:white">
                                <div class="clearfix mb-3"> <span class="float-start badge rounded-pill bg-primary" style="color: whitesmoke;cursor: pointer"  @click="get_article_related(related.id)">{{ related.title_ar }}</span>  </div>
                                <h5 class="card-title">{{related.description_ar.substring(0,25)}}.</h5>

                                <!--                            <div class="text-center my-4"> <button @click="get_article(related.id)" class="btn btn-warning" style="color: whitesmoke">قراءه المزيد</button> </div>-->
                            </div>
                        </div>
                    </div>

                </div>
            </div>








        <foter></foter>


    </main>
</template>

<script>
export default {
    data(){
        return {
            form :{
                comment : null
            },
            tap_title : null,
            article : null,
            relates : [],
            mobile: null,
            sucss : false,
            error:false,
            warning:false,
            comments : [],
            id :null,
            related_id:null
        }
    },
    name: 'Services',

    created() {
        this.get_article(this.$route.params.id);
        this.related_articles();
        this.commentsGet();
console.log(this.$router.history.current);
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
            document.title = "إيتي ثري للتسويق الرقمي  | تفاصيل المدونة"
        else
            document.title = "EightyThree | Article Details"
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
        async get_article(id ) {

            try{
                const res = await this.AxiosRequest("get" , "/api/article/details/"+id);
                if(res.status == 200){

                    this.article = res.data;
                    console.log(this.article.keywords[0]);
                    window.scrollTo(0,0);


                }
                else{
                    console.log("eror occured");
                }
            }
            catch(error){
                console.log("eror occured");
            }
        },
        async get_article_related(id ) {
           this.related_id = id;
            try{
                const res = await this.AxiosRequest("get" , "/api/article/details/"+id);
                if(res.status == 200){
                   this.commentsGet2(id)
                    this.article = res.data;
                    window.scrollTo(0,0);


                }
                else{
                    console.log("eror occured");
                }
            }
            catch(error){
                console.log("eror occured");
            }
        },
        async related_articles() {
            try{
                const res = await this.AxiosRequest("get" , "/api/articles/related/"+this.$route.params.id);
                if(res.status == 200){

                    this.relates = res.data;
                    console.log( this.relates);


                }
                else{
                    console.log("eror occured related");
                }
            }
            catch(error){
                console.log("eror occured related");
            }
        },

       async commentfunc(){
            if(this.related_id != null){
                this.id = this.related_id;
            }else{
                this.id = this.$route.params.id;
            }
            if(this.form.comment == null){
                this.error = true
                this.sucss = false
                setTimeout(function () {
                    $("#comment_error").hide();
                    this.error = false;
                }, 4000)

            }else{
                if(this.form.comment != null) {
                    this.error = false
                    try {
                        const res = await this.AxiosRequest("post", "/api/articles/comment/" + this.id, this.form);
                        if (res.status == 200) {
                            console.log(res.data);
                            this.form.comment = null
                            if (this.related_id != null) {
                                this.commentsGet2(this.related_id);
                            } else {
                                this.commentsGet();
                            }

                            // this.error = false
                            this.warning = true;
                            setTimeout(function () {
                                $("#comment_warn").hide();
                                this.warning = false;
                            }, 4000)


                        } else {
                            console.log("eror occured related");
                        }
                    } catch (error) {
                        console.log("eror occured related");
                    }
                }


            }
        },



        async commentsGet(){
            try{
                const res = await this.AxiosRequest("get" , "/api/article/comments/"+this.$route.params.id);
                if(res.status == 200){
                    console.log(res.data.length);
                    this.comments = null;
                    this.comments = res.data
                }
                else{
                    console.log("eror occured related");
                }
            }
            catch(error){
                console.log("eror occured related");
            }


        },

        async commentsGet2(id){
            try{
                const res = await this.AxiosRequest("get" , "/api/article/comments/"+id);
                if(res.status == 200){
                    console.log(res.data.length);
                    this.comments = null;
                    this.comments = res.data
                }
                else{
                    console.log("eror occured related");
                }
            }
            catch(error){
                console.log("eror occured related");
            }


        }

       // async gotoArticle(id){
       //      try{
       //          const res = await this.AxiosRequest("get" , "/api/article/details/"+id);
       //          if(res.status == 200){
       //
       //              this.article = res.data;
       //              window.scrollTo(0,0);
       //
       //
       //          }
       //          else{
       //              console.log("eror occured");
       //          }
       //      }
       //      catch(error){
       //          console.log("eror occured");
       //      }
       //  }
    },

}
</script>
<style lang="scss" scoped>
*{
    color: black
}
.services {
    background-color: #ffffff;
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
