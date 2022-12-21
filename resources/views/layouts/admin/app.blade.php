<!doctype html>
<html lang="en" dir="rtl">
<head>
    <!-- Meta data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="Eudica - Online Education & Learning Courses HTML CSS Responsive Template" name="description">
    <meta content="Spruko Technologies Private Limited" name="author">
    <meta name="keywords" content="html rtl, html dir rtl, rtl website template, bootstrap 4 rtl template, rtl bootstrap template, admin panel template rtl, admin panel rtl, html5 rtl, academy training course css template, classes online training website templates, courses training html5 template design, education training rwd simple template, educational learning management jquery html, elearning bootstrap education template, professional training center bootstrap html, institute coaching mobile responsive template, marketplace html template premium, learning management system jquery html, clean online course teaching directory template, online learning course management system, online course website template css html, premium lms training web template, training course responsive website"/>

    <!-- Favicon -->
{{--    <link rel="icon" href="{{url("/assets/admin/images/brand/favicon.ico")}}" type="image/x-icon"/>--}}
{{--    <link rel="shortcut icon" type="image/x-icon" href="{{url("/assets/admin/images/brand/favicon.ico")}}" />--}}

    <!-- Title -->
    <title>Eightyythree Panel</title>

    <!-- Bootstrap css -->
    <link href="{{url("/assets/admin/plugins/bootstrap-4.3.1/css/bootstrap.min.css")}}" rel="stylesheet" />

    <!-- Sidemenu Css -->
    <link href="{{url("/assets/admin/plugins/sidemenu/sidemenu-rtl.css")}}" rel="stylesheet" />

    <!-- Dashboard Css -->
    <link href="{{url("/assets/admin/css/style-rtl.css")}}" rel="stylesheet" />
    <link href="{{url("/assets/admin/css/admin-custom.css")}}" rel="stylesheet" />

    <!-- c3.js Charts Plugin -->
    <link href="{{url("/assets/admin/plugins/charts-c3/c3-chart.css")}}" rel="stylesheet" />

    <!-- Custom scroll bar css-->
    <link href="{{url("/assets/admin/plugins/scroll-bar/jquery.mCustomScrollbar.css")}}" rel="stylesheet" />

    <!---Font icons-->
    <link href="{{url("/assets/admin/css/icons.css")}}" rel="stylesheet"/>

    <!-- Switcher css -->
    <link  href="{{url("/assets/admin/switcher/css/switcher-rtl.css")}}" rel="stylesheet" id="switcher-css" type="text/css" media="all"/>

    <!-- Color Skin css -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="{{url("/assets/admin/color-skins/color6.css")}}" />
    <!-- Data table css -->
    <link href="{{url("/assets/admin/plugins/datatable/dataTables.bootstrap4.min.css")}}" rel="stylesheet" />
    <link href="{{url("/assets/admin/plugins/datatable/jquery.dataTables.min.css")}}" rel="stylesheet" />

    <!-- WYSIWYG Editor css -->
    <link href="{{url("/assets/admin/plugins/wysiwyag/richtext.css")}}" rel="stylesheet" />

    <!-- file Uploads -->
    <link href="{{url("/assets/admin/plugins/fileuploads/css/fileupload.css")}}" rel="stylesheet" type="text/css" />
</head>

<body class="app sidebar-mini">



<!--Loader-->
<div id="global-loader">
    <img src="../assets/admin/images/loader.svg" class="loader-img" alt="">
</div>

<!--App-Header-->
<div class="app-header1 header py-1 d-flex">
    <div class="container-fluid">
        <div class="d-flex">
                                <a class="header-brand" href="/admin">
                                  EightyyThree Panel
                                </a>
            <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a>
            <div class="header-navicon">
                <a href="#" data-toggle="search" class="nav-link d-lg-none navsearch-icon">
                    <i class="fa fa-search"></i>
                </a>
            </div>
{{--            <div class="header-navsearch">--}}
{{--                <a href="#" class=" "></a>--}}
{{--                <form class="form-inline mr-auto">--}}
{{--                    <div class="nav-search">--}}
{{--                        <input type="search" class="form-control header-search" placeholder="Search…" aria-label="Search" >--}}
{{--                        <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}
            <div class="d-flex order-lg-2 mr-auto">
                <div class="dropdown d-none d-md-flex" >
                    <a  class="nav-link icon full-screen-link">
                        <i class="fe fe-maximize-2"  id="fullscreen-button"></i>
                    </a>
                </div>
{{--                <div class="dropdown d-none d-md-flex country-selector">--}}
{{--                    <a href="#" class="d-flex nav-link leading-none" data-toggle="dropdown">--}}
{{--                        <img src="../assets/admin/images/flags/egy_flag.jpg" alt="img" class="avatar avatar-xs ml-1 align-self-center">--}}
{{--                        <div>--}}
{{--                            <strong class="text-dark">Arabic</strong>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <div class="language-width dropdown-menu dropdown-menu-left dropdown-menu-arrow">--}}
{{--                        <a href="#" class="dropdown-item d-flex pb-3">--}}
{{--                            <img src="../assets/admin/images/flags/us_flag.jpg"  alt="flag-img" class="avatar  ml-3 align-self-center" >--}}
{{--                            <div>--}}
{{--                                <strong>English</strong>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                        --}}{{--                                <a href="#" class="dropdown-item d-flex pb-3">--}}
{{--                        --}}{{--                                    <img src="../assets/admin/images/flags/germany_flag.jpg"  alt="flag-img" class="avatar  ml-3 align-self-center" >--}}
{{--                        --}}{{--                                    <div>--}}
{{--                        --}}{{--                                        <strong>Germany</strong>--}}
{{--                        --}}{{--                                    </div>--}}
{{--                        --}}{{--                                </a>--}}
{{--                        --}}{{--                                <a href="#" class="dropdown-item d-flex pb-3">--}}
{{--                        --}}{{--                                    <img src="../assets/admin/images/flags/italy_flag.jpg"  alt="flag-img" class="avatar  ml-3 align-self-center" >--}}
{{--                        --}}{{--                                    <div>--}}
{{--                        --}}{{--                                        <strong>Italy</strong>--}}
{{--                        --}}{{--                                    </div>--}}
{{--                        --}}{{--                                </a>--}}
{{--                        --}}{{--                                <a href="#" class="dropdown-item d-flex pb-3">--}}
{{--                        --}}{{--                                    <img src="../assets/admin/images/flags/russia_flag.jpg"  alt="flag-img" class="avatar  ml-3 align-self-center" >--}}
{{--                        --}}{{--                                    <div>--}}
{{--                        --}}{{--                                        <strong>Russia</strong>--}}
{{--                        --}}{{--                                    </div>--}}
{{--                        --}}{{--                                </a>--}}
{{--                        --}}{{--                                <a href="#" class="dropdown-item d-flex pb-3">--}}
{{--                        --}}{{--                                    <img src="../assets/admin/images/flags/spain_flag.jpg"  alt="flag-img" class="avatar  ml-3 align-self-center" >--}}
{{--                        --}}{{--                                    <div>--}}
{{--                        --}}{{--                                        <strong>Spain</strong>--}}
{{--                        --}}{{--                                    </div>--}}
{{--                        --}}{{--                                </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="dropdown d-none d-md-flex">--}}
{{--                    <a class="nav-link icon" data-toggle="dropdown">--}}
{{--                        <i class="fa fa-bell-o"></i>--}}
{{--                        <span class=" nav-unread badge badge-danger  badge-pill">4</span>--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-menu dropdown-menu-left dropdown-menu-arrow">--}}
{{--                        <a href="#" class="dropdown-item text-center">You have 4 notification</a>--}}
{{--                        <div class="dropdown-divider"></div>--}}
{{--                        <a href="#" class="dropdown-item d-flex pb-3">--}}
{{--                            <div class="notifyimg">--}}
{{--                                <i class="fa fa-envelope-o"></i>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <strong>2 new Messages</strong>--}}
{{--                                <div class="small text-muted">17:50 Pm</div>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                        <a href="#" class="dropdown-item d-flex pb-3">--}}
{{--                            <div class="notifyimg">--}}
{{--                                <i class="fa fa-calendar"></i>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <strong> 1 Event Soon</strong>--}}
{{--                                <div class="small text-muted">19-10-2019</div>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                        <a href="#" class="dropdown-item d-flex pb-3">--}}
{{--                            <div class="notifyimg">--}}
{{--                                <i class="fa fa-comment-o"></i>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <strong> 3 new Comments</strong>--}}
{{--                                <div class="small text-muted">05:34 Am</div>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                        <a href="#" class="dropdown-item d-flex pb-3">--}}
{{--                            <div class="notifyimg">--}}
{{--                                <i class="fa fa-exclamation-triangle"></i>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <strong> Application Error</strong>--}}
{{--                                <div class="small text-muted">13:45 Pm</div>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-divider"></div>--}}
{{--                        <a href="#" class="dropdown-item text-center">See all Notification</a>--}}
{{--                    </div>--}}
{{--                </div>--}}

                <div class="dropdown ">
                    <a href="#" class="nav-link pl-0 leading-none user-img" data-toggle="dropdown">
                        <img src="https://www.kindpng.com/picc/m/24-248253_user-profile-default-image-png-clipart-png-download.png" alt="profile-img" class="avatar avatar-md brround">
                    </a>
                    <div class="dropdown-menu dropdown-menu-left dropdown-menu-arrow ">
{{--                        <a class="dropdown-item" href="profile.html">--}}
{{--                            <i class="dropdown-icon icon icon-user"></i> My Profile--}}
{{--                        </a>--}}
{{--                        <a class="dropdown-item" href="emailservices.html">--}}
{{--                            <i class="dropdown-icon icon icon-speech"></i> Inbox--}}
{{--                        </a>--}}
{{--                        <a class="dropdown-item" href="editprofile.html">--}}
{{--                            <i class="dropdown-icon  icon icon-settings"></i> Account Settings--}}
{{--                        </a>--}}
                        <a class="dropdown-item" href="{{route("admin-logout")}}">
                            <i class="dropdown-icon icon icon-power"></i> Logout
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/App-Header-->

<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar doc-sidebar">
    <div class="app-sidebar__user clearfix">
        <div class="dropdown user-pro-body">
            <div>
                <img src="https://www.kindpng.com/picc/m/24-248253_user-profile-default-image-png-clipart-png-download.png" alt="user-img" class="avatar avatar-lg brround">
                <a href="editprofile.html" class="profile-img">
                    <span class="fa fa-pencil" aria-hidden="true"></span>
                </a>
            </div>
            <div class="user-info">
                <h2>Welcome Admin</h2>
                <span>Site Manager</span>
            </div>
        </div>
    </div>
    <ul class="side-menu">
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"  ><i class="side-menu__icon fe fe-airplay"></i><span class="side-menu__label">الصفحات</span><i class="angle fa fa-angle-right"></i></a>
                                <ul class="slide-menu">
                                    <li><a class="slide-item" href="{{route("admin.pages.index")}}">جميع الصفحات</a></li>
                                    <li><a class="slide-item" href="{{route("pages.create")}}">إنشاء صفحه</a></li>

                                </ul>
        </li>

        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"  ><i class="side-menu__icon fe fe-user"></i><span class="side-menu__label">الأعضاء</span> <i class="angle fa fa-angle-right"></i></a>
                                <ul class="slide-menu">
                                    <li><a class="slide-item"  href="{{route("members")}}">جميع الأعغضاء</a></li>
                                    <li><a class="slide-item" href="{{route("members.create")}}">إضافه عضو</a></li>

                                </ul>
        </li>

        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"  ><i class="side-menu__icon fe fe-book"></i><span class="side-menu__label">المقالات</span> <i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a class="slide-item"  href="{{route("articles")}}">جميع المقالات</a></li>
                <li><a class="slide-item" href="{{route("articles.create")}}">إضافه مقال</a></li>
                <li><a class="slide-item" href="{{route("articles.comments")}}">تعليقات المقالات</a></li>

            </ul>
        </li>

        <li class="slide">
            <a class="side-menu__item"  href="{{route("settings")}}"><i class="side-menu__icon fe fe-search"></i><span class="side-menu__label">الإعدادات</span></a>
            {{--                    <ul class="slide-menu">--}}
            {{--                        <li><a class="slide-item" href="index.html">Dashboard 1</a></li>--}}
            {{--                        <li><a class="slide-item" href="index2.html">Dashboard 2</a></li>--}}
            {{--                        <li><a class="slide-item" href="index3.html">Dashboard 3</a></li>--}}
            {{--                        <li><a class="slide-item" href="index4.html">Dashboard 4</a></li>--}}
            {{--                        <li><a class="slide-item" href="index5.html">Dashboard 5</a></li>--}}
            {{--                    </ul>--}}
        </li>


    </ul>
</aside>
<!--/Loader-->
@yield("content")

<!--Footer-->
<footer class="footer">
    <div class="container">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-lg-12 col-sm-12 mt-3 mt-lg-0 text-center">
                Copyright © 2021 <a href="#">Eightyythree.com</a> جميع الحقوق محفوظه.
            </div>
        </div>
    </div>
</footer>
<!--/Footer-->


<!-- Back to top -->
<a href="#top" id="back-to-top" ><i class="fa fa-long-arrow-up"></i></a>

<!-- JQuery js-->
<script src="{{url("/assets/admin/js/jquery-3.2.1.min.js")}}"></script>

<!-- Bootstrap js -->
<script src="{{url("/assets/admin/plugins/bootstrap-4.3.1/js/popper.min.js")}}"></script>
<script src="{{url("/assets/admin/plugins/bootstrap-4.3.1/js/bootstrap.min.js")}}"></script>

<!--JQuery Sparkline Js-->
<script src="{{url("/assets/admin/js/jquery.sparkline.min.js")}}"></script>

<!-- Circle Progress Js-->
<script src="{{url("/assets/admin/js/circle-progress.min.js")}}"></script>

<!-- Star Rating Js-->
<script src="{{url("/assets/admin/plugins/rating/jquery.rating-stars.js")}}"></script>

<!-- Fullside-menu Js-->
<script src="{{url("/assets/admin/plugins/sidemenu/sidemenu.js")}}"></script>

<!-- Custom scroll bar Js-->
<script src="{{url("/assets/admin/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js")}}"></script>

<!--Counters -->
<script src="{{url("/assets/admin/plugins/counters/counterup.min.js")}}"></script>
<script src="{{url("/assets/admin/plugins/counters/waypoints.min.js")}}"></script>

<!-- CHARTJS CHART -->
<script src="{{url("/assets/admin/plugins/chart/Chart.bundle.js")}}"></script>
<script src="{{url("/assets/admin/plugins/chart/utils.js")}}"></script>

<!-- ECharts Plugin -->
<script src="{{url("/assets/admin/plugins/echarts/echarts.js")}}"></script>
<script src="{{url("/assets/admin/js/index1.js")}}"></script>

<!-- Data tables -->
<script src="{{url("/assets/admin/plugins/datatable/jquery.dataTables.min.js")}}"></script>
<script src="{{url("/assets/admin/plugins/datatable/dataTables.bootstrap4.min.js")}}"></script>
<script src="{{url("/assets/admin/js/datatable.js")}}"></script>
<!-- Custom Js-->
<script src="{{url("/assets/admin/js/admin-custom.js")}}"></script>

<!-- WYSIWYG Editor js -->
<script src="{{url("/assets/admin/plugins/wysiwyag/jquery.richtext.js")}}"></script>
<script src="{{url("/assets/admin/js/formeditor.js")}}"></script>

<!-- file uploads js -->
<script src="{{url("/assets/admin/plugins/fileuploads/js/fileupload.js")}}"></script>

<!--InputMask Js-->
<script src="{{url("/assets/admin/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js")}}"></script>
</body>
</html>

