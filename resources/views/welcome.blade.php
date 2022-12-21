@extends('layouts.front')
@section('content')
    <style>
        #socialShare {
            width: 100%;
            margin-top: 15px;
            text-align: center;
        }

        #socialShare a,
        #socialShare > .socialBox {
            position: relative;
            float: none;
            display: inline-block;
            color: #fff;
            font-size: 20px;
            padding: 5px;
            background-color: transparent;
            width: 40px;
            height: 40px;
            line-height: 40px;
            text-align: center;
            border-radius: 50%;
        }

        #socialShare  a {
            background-color: rgba(0, 0, 0, 0.2);
        }

        #socialShare > * > span {
            background-color: rgba(0, 0, 0, 0.6);
            box-shadow: 0 0 0 5px rgba(0, 0, 0, 0.15);
            display: block;
            color: #fff;
            font-size: 16px;
            padding: 8px;
            width: 24px;
            height: 24px;
            line-height: 24px;
            text-align: center;
            border-radius: 50%;
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            transform: scale(1);
            -webkit-transition: all .35s ease-in-out;
            -moz-transition: all .35s ease-in-out;
            transition: all .35s ease-in-out;
        }
        #socialShare > * > span:hover,
        #socialShare > .open > span {
            -webkit-transform: scale(1.25);
            -moz-transform: scale(1.25);
            transform: scale(1.25);
            -webkit-transition: all .15s ease-in-out;
            -moz-transition: all .15s ease-in-out;
            transition: all .15s ease-in-out;
        }

        #socialGallery {
            left: 50%;
            margin: 0 auto 0;
            position: absolute;
            top: 60px;
            transform: translate(-50%, 0);
            visibility: hidden;
            width: 400px;
        }

        #socialGallery a {
            visibility: hidden;
            opacity: 0;
            margin: 5px 2px;
            background-color: rgba(0, 0, 0, 0.6);
            position: relative;
            top: 10px;
        }

        #socialGallery a > span {
            position: relative;
            top: 4px;
            left: 4px;
            border-radius: 50%;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
        }

        .socialToolBox {
            cursor: default;
        }

        .pointer {
            cursor: pointer
        }

        .facebook:hover {
            background: #3b5998 !important
        }

        .google:hover {
            background: #dd4b39 !important
        }

        .instagram:hover {
            background: #517fa4 !important
        }

        .tumblr:hover {
            background: #32506d !important
        }

        .twitter:hover {
            background: #00aced !important
        }

        .youtube:hover {
            background: #bb0000 !important
        }

        @media only screen and (max-width: 480px) {
            #socialGallery {
                width: 120px;
            }
        }

        .float{
            position:fixed;
            width:60px;
            height:60px;
            bottom:40px;

            right: -550px;


            text-align:center;

            z-index: 9999;
        }



        .adminActions {
            position: fixed;
            bottom: 35px; right: 35px;
            padding: 15px;
        }

        .adminButton {
            height: 60px;
            width: 60px;
            background-color: rgb(0 0 0 / 41%);
            border-radius: 50%;
            display: block;
            color: #fff;
            text-align: center;
            position: relative;
            z-index: 1;
        }

        .adminButton i {
            font-size: 22px;
        }

        .adminButtons {
            position: absolute;
            width: 100%;
            bottom: 120%;
            text-align: center;
            padding-right: 50px;

        }

        .adminButtons a {
            display: block;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            text-decoration: none;
            margin: 10px auto 0;
            line-height: 1.15;
            color: #fff;
            opacity: 0;
            visibility: hidden;
            position: relative;
            box-shadow: 0 0 5px 1px rgba(51, 51, 51, .3);
        }

        .adminButtons a:hover {
            transform: scale(1.05);
        }

        .adminButtons a:nth-child(1) {background-color: #ffffff; transition: opacity .2s ease-in-out .3s, transform .15s ease-in-out;}
        .adminButtons a:nth-child(2) {background-color: #ffffff; transition: opacity .2s ease-in-out .25s, transform .15s ease-in-out;}
        .adminButtons a:nth-child(3) {background-color: #ffffff; transition: opacity .2s ease-in-out .2s, transform .15s ease-in-out;}
        .adminButtons a:nth-child(4) {background-color: #ffffff; transition: opacity .2s ease-in-out .15s, transform .15s ease-in-out;}
        .adminButtons a:nth-child(5) {background-color: #ffffff; transition: opacity .2s ease-in-out .15s, transform .15s ease-in-out;}

        .adminActions a i {
            position: absolute;
            top: 50%; left: 50%;
            transform: translate(-50%, -50%);
        }

        .adminToggle {
            -webkit-appearance: none;
            position: absolute;
            border-radius: 50%;
            top: 0; left: 0;
            margin: 0;
            width: 100%;
            height: 100%;
            cursor: pointer;
            background-color: transparent;
            border: none;
            outline: none;
            z-index: 2;
            transition: box-shadow .2s ease-in-out;
            box-shadow: 0 3px 5px 1px rgba(51, 51, 51, .3);
        }

        .adminToggle:hover {
            box-shadow: 0 3px 6px 2px rgba(51, 51, 51, .3);
        }

        .adminToggle:checked ~ .adminButtons a {
            opacity: 1;
            visibility: visible;
        }

        .fa-envelope{
            color: #4984b7;
        }
        .fa-mobile{
            color:black;
        }

    </style>

        <div id="app" class="flex-center position-ref full-height" :style="{direction : $store.state.lang == 'ar' ? 'rtl' : 'ltr'}">
            <navbar></navbar>
            <sidebar></sidebar>
            <router-view> </router-view>

        </div>
    <div class="adminActions" style="z-index: 9999">
        <input type="checkbox" name="adminToggle" class="adminToggle" />
        <a class="adminButton" href="#!"><i class="fa fa-phone"></i></a>
        <div class="adminButtons">
            {{--            <a href="#" title="Add Company"><i class="fa fa-facebook"></i></a>--}}
            <a href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site http://www.website.com."
               title="Share by Email" >
                <i class="fa fa-envelope "></i>
            </a>
            <a href="tel:966552389207"
            >
                <i class="fa fa-mobile fa-lg "></i>
            </a>
            <a href="https://instagram.com/eightyy_three?igshid=1ntpyksaoqtpl" target="_target" title="Edit User"><i class="fa fa-instagram"></i></a>
            <a href="https://twitter.com/eightyy_three?s=11" target="_target" title="Add User"><i class="fa fa-twitter"></i></a>
            <a href="https://www.linkedin.com/company/eightyythree" target="_target" title="Edit Company"><i class="fa fa-linkedin"></i></a>



        </div>
    </div>

<script>
    // add this rail gallery effect
    $(document).on('click', '#socialShare > .socialBox', function() {

        var self = $(this);
        var element = $('#socialGallery a');
        var c = 0;

        if (self.hasClass('animate')) {
            return;
        }

        if (!self.hasClass('open')) {

            self.addClass('open');

            TweenMax.staggerTo(element, 0.3, {
                    opacity: 1,
                    visibility: 'visible'
                },
                0.075);
            TweenMax.staggerTo(element, 0.3, {
                    top: -12,
                    ease: Cubic.easeOut
                },
                0.075);

            TweenMax.staggerTo(element, 0.2, {
                    top: 0,
                    delay: 0.1,
                    ease: Cubic.easeOut,
                    onComplete: function() {
                        c++;
                        if (c >= element.length) {
                            self.removeClass('animate');
                        }
                    }
                },
                0.075);

            self.addClass('animate');

        } else {

            TweenMax.staggerTo(element, 0.3, {
                    opacity: 0,
                    onComplete: function() {
                        c++;
                        if (c >= element.length) {
                            self.removeClass('open animate');
                            element.css('visibility', 'hidden');
                        };
                    }
                },
                0.075);
        }
    });


</script>

        <script src="../js/app.js"></script>
    @endsection
