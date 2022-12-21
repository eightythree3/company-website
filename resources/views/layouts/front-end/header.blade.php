<!DOCTYPE html>
<html  class="no-js">
<!-- Begin Head -->
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    {!! JsonLd::generate() !!} --}}
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> ->
     ================= Favicon ================== -->
    <link rel="shortcut icon" href="{{ url('/fav.ico') }}">
    <link rel="manifest" href="{{request()->root()}}/manifest.json">
    <!-- ============== Resource style ============== -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />

    <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=60a3aad3a99fbf0011744293&product=inline-share-buttons" async="async"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-T142KSEKVB"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-T142KSEKVB');
    </script>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-WSVDJWH');</script>
    <!-- End Google Tag Manager -->

    <style lang="scss">

        @import url(//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css);







        @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap');
        @font-face{font-family:"You-are-a-TOY";src:url(/fonts/You-are-a-TOY.ttf.9ddf551.woff)
        format("woff"),url(/fonts/You-are-a-TOY.ttf.4d9713f.svg#You-are-a-TOY)
        format("svg"),url(/fonts/You-are-a-TOY.ttf.49d5d85.eot),
        url(/fonts/You-are-a-TOY.ttf.49d5d85.eot?#iefix)
        format("embedded-opentype");font-weight:400;font-style:normal}

        .col-md-4{
            padding-bottom:20px;
        }

        .white {
            color: #fff !important;
        }
        .mt{float: left;margin-top: -20px;padding-top: 20px;}
        .bg-blue-ui {
            background-color: #708198 !important;
        }
        figure img{width:300px;}

        #blogCarousel {
            padding-bottom: 100px;
        }

        .blog .carousel-indicators {
            left: 0;
            top: -50px;
            height: 50%;
        }


        /* The colour of the indicators */

        .blog .carousel-indicators li {
            background: #708198;
            border-radius: 50%;
            width: 8px;
            height: 8px;
        }

        .blog .carousel-indicators .active {
            background: #0fc9af;
        }




        .item-carousel-blog-block {
            outline: medium none;
            padding: 15px;
        }

        .item-box-blog {
            border: 1px solid #dadada;
            text-align: center;
            z-index: 4;
            padding: 20px;
        }

        .item-box-blog-image {
            position: relative;
        }

        .item-box-blog-image figure img {
            width: 100%;
            height: auto;
        }

        .item-box-blog-date {
            position: absolute;
            z-index: 5;
            padding: 4px 20px;
            top: -20px;
            right: 8px;
            background-color: #41cb52;
        }

        .item-box-blog-date span {
            color: #fff;
            display: block;
            text-align: center;
            line-height: 1.2;
        }

        .item-box-blog-date span.mon {
            font-size: 18px;
        }

        .item-box-blog-date span.day {
            font-size: 16px;
        }

        .item-box-blog-body {
            padding: 10px;
        }

        .item-heading-blog a h5 {
            margin: 0;
            line-height: 1;
            text-decoration:none;
            transition: color 0.3s;
        }

        .item-box-blog-heading a {
            text-decoration: none;
        }

        .item-box-blog-data p {
            font-size: 13px;
        }

        .item-box-blog-data p i {
            font-size: 12px;
        }

        .item-box-blog-text {
            max-height: 100px;
            overflow: hidden;
        }

        .mt-10 {
            float: left;
            margin-top: -10px;
            padding-top: 10px;
        }

        .btn.bg-blue-ui.white.read {
            cursor: pointer;
            padding: 4px 20px;
            float: left;
            margin-top: 10px;
        }

        .btn.bg-blue-ui.white.read:hover {
            box-shadow: 0px 5px 15px inset #4d5f77;
        }

        body {
            background-color: #6682e9;
            font-family: "You-are-a-TOY";
            color: #fff;
            font-size: 28px;
            max-width: 100%;
            overflow-x: hidden;
            direction: ltr;
        }





        body.ar {

            text-align: right;
            font-family: 'Cairo', sans-serif !important;
            font-size: 24px;
            line-height: 1.8;




            .title,
            .side-menu .content .routers ul a,
            .service.mobile .title .service.mobile .title:hover,
            .lets-talk .content .title,
            .service .title {

                font-size: 42px !important;
                line-height: 2;
            }

            .description,
            .footer .footer-widget li {
                font-size: 20px !important;
                line-height: 1.8;
            }

            .contact-us-info ul {
                font-size: 28px;
                line-height: 1.8;
            }

            .lets-talk .content input,
            .lets-talk .content textarea {
                font-size: 22px !important
            }

            .contact-us img.right-img {
                transform: scaleX(-1);
            }

            .contact-us .contact-image:after {
                transform: rotate(0deg) scaleX(-1);
                left: 100px;
            }

            .contact-us:hover .contact-image:after {
                top: 200px;
                transform: rotate(60deg) scaleX(-1);
                left: 80%;
            }

            .contact-us:hover .contact-image.mobile:after {
                left: 70%;
                top: 100px;
                transform: rotate(40deg) scaleX(-1);
            }

            .list-unstyled {
                padding-left: inherit;
                padding-right: 0;
            }

        }
        body.ar .lets-talk .content .title, body.ar .service.mobile .title .service.mobile .title:hover, body.ar .service .title, body.ar .side-menu .content .routers ul a, body.ar .title {
            font-size: 42px !important;
            line-height: 2;
        }
        body.ar .description, body.ar .footer .footer-widget li {
            font-size: 20px!important;
            line-height: 1.8;
        }


        .footer {
            z-index: 999;
            background-color: #384a89;
            background-image: url(/img/Particles.png);
            background-attachment: fixed;
            padding: 50px 0;
        }
        .footer .footer-widget .footer-title {
            font-size: 22px
        }



        main {
            height: 100%;
        }

        .container {
            @media (min-width: 576px) {

                .container-md,
                .container-sm,
                .container {
                    max-width: 90%;
                }
            }
        }

        .section {
            position: relative;
            max-height: 100%;
            min-height: 100%;
            overflow: hidden;
            height: 100%;
            padding: 100px 0;
            display: flex;
            align-items: center;
            background-image: url("/img/Particles.png");
            background-attachment: fixed;
            z-index: 2;

            @media (max-width: 768px) {
                height: 100% !important;
                padding: 100px 0;
            }

        }
       .section:first-child {
           height: 100vh;
       }

      .section:nth-child(2) {
          box-shadow: 0px 10px 20px #000;

      }
        ol,
        ul,
        dl {
            margin-bottom: 0;
        }

        a {
            text-decoration: none !important;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: #fff;
            line-height: 1.6;
        }

        *:focus {
            outline: inherit !important;
            box-shadow: none !important;
        }

        .title {
            font-size: 62px;
        }

        .description {
            font-size: 32px;
        }

        .service-list {
            ul {
                list-style-type: circle !important;
            }
        }

        .reverse-column {
            @media (max-width: 768px) {
                order: 1;

                img {
                    margin-bottom: 50px;
                }
            }
        }

        .fixed-section {
            position: fixed;

            @media (max-width: 768px) {
                position: relative;
            }
        }

        .my-btn {
            color: white;
            background: none;
            border: none;
            background-color: #63c47f;
            display: block;
            margin: auto;
            border-radius: 30px;
            width: 350px;
            height: 50px;
            line-height: 50px;
            margin-top: 30px;
        }


        .top_to_bottom {
            &:hover {
                img.right-img {
                    animation: rotateImage 2.5s ease-in-out infinite;
                    position: relative;
                }
            }
        }

        .right_to_left {
            &:hover {
                img.right-img {
                    animation: rotateImageLeftRight 2.5s ease-in-out infinite;
                    position: relative;
                }
            }

        }

        @keyframes rotateImage {

            0%,
            100% {
                bottom: 0;
            }

            50% {
                bottom: 40px;
                transform: rotate(10deg);
            }
        }

        @keyframes rotateImageLeftRight {

            0%,
            100% {

                transform: rotate(-10deg);
            }

            50% {

                transform: rotate(10deg);
            }
        }


    </style>
{{--    @stack('css')--}}


    <!-- Global site tag (gtag.js) - Google Analytics -->
{{-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-T142KSEKVB"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-T142KSEKVB');
</script> --}}
<!-- End Google Analytics -->

<!-- Google Tag Manager -->
{{-- <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WSVDJWH');</script> --}}
<!-- End Google Tag Manager -->

</head>

<body id="to_top">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WSVDJWH"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
 <!-- Google Tag Manager (noscript) -->
{{-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WSVDJWH"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> --}}
<!-- End Google Tag Manager (noscript) -->



<div id="content">
