@extends("layouts.admin.app")
@section("content")
<!--Page-->
<div class="page">
    <div class="page-main h-100">


        <!-- /Sidebar menu-->

        <!--App-Content-->
        <div class="app-content my-3 my-md-5">
            <div class="side-app">
                <div class="page-header">
                    <h4 class="page-title">الرئيسية</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin">  الرئيسية</a></li>
                        <li class="breadcrumb-item active" aria-current="page">إحصائيات</li>
                    </ol>
                </div>

                <div class="row">



                    <div class=" col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="card overflow-hidden">
                            <div class="card-header">
                                <h3 class="card-title">إجمالى الأعضاء</h3>
                                <div class="card-options"> <a class="btn btn-sm btn-info" href="/admin/members">عرض</a> </div>
                            </div>
                            <div class="card-body ">
                                <h2 class="text-dark  mt-0 font-weight-bold">{{$users}}</h2>
                                <div class="progress progress-sm mt-0 mb-2">
                                    <div class="progress-bar bg-info w-25" role="progressbar"></div>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class=" col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="card overflow-hidden">
                            <div class="card-header">
                                <h3 class="card-title">إجمالى المقالات</h3>
                                <div class="card-options"> <a class="btn btn-sm btn-primary" href="/admin/articles">عرض</a> </div>
                            </div>
                            <div class="card-body ">
                                <h2 class="text-dark  mt-0 font-weight-bold">{{$articles}}</h2>
                                <div class="progress progress-sm mt-0 mb-2">
                                    <div class="progress-bar bg-primary w-15" role="progressbar"></div>
                                </div>

                            </div>
                        </div>
                    </div>
{{--                    <div class=" col-sm-12 col-md-6 col-lg-6 col-xl-3">--}}
{{--                        <div class="card overflow-hidden">--}}
{{--                            <div class="card-header">--}}
{{--                                <h3 class="card-title">Total Graduates</h3>--}}
{{--                                <div class="card-options"> <a class="btn btn-sm btn-warning" href="#">View</a> </div>--}}
{{--                            </div>--}}
{{--                            <div class="card-body ">--}}
{{--                                <h2 class="text-dark  mt-0 font-weight-bold">3,517</h2>--}}
{{--                                <div class="progress progress-sm mt-0 mb-2">--}}
{{--                                    <div class="progress-bar bg-warning w-50" role="progressbar"></div>--}}
{{--                                </div>--}}
{{--                                <div class=""><i class="fa fa-caret-down text-danger ml-1"></i>5% than last year</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 ">--}}
{{--                        <div class="card overflow-hidden">--}}
{{--                            <div class="card-header">--}}
{{--                                <h3 class="card-title">Total Courses</h3>--}}
{{--                                <div class="card-options"> <a class="btn btn-sm btn-info" href="#">View</a> </div>--}}
{{--                            </div>--}}
{{--                            <div class="card-body ">--}}
{{--                                <h2 class="text-dark  mt-0  font-weight-bold">1,759</h2>--}}
{{--                                <div class="progress progress-sm mt-0 mb-2">--}}
{{--                                    <div class="progress-bar bg-info w-25" role="progressbar"></div>--}}
{{--                                </div>--}}
{{--                                <div class=""><i class="fa fa-caret-up text-success ml-1"></i>15% than last year</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>

            </div>
        </div>
    </div>

@endsection
