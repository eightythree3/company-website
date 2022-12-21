@extends("layouts.admin.app")
@section("content")


    <div class="app-content my-3 my-md-5">
        <div class="side-app">
            <div class="page-header">
                <h4 class="page-title">تعديل الصفحه </h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">الصفحات</a></li>
                    <li class="breadcrumb-item active" aria-current="page">تعديل الصفحه </li>
                </ol>
            </div>
            <!--/Page-Header-->

            <div class="row">
                <div class="container col-xl-12">
                    <div class="card m-b-20">
                        <div class="card-header">
                            <h3 class="card-title">تعديل الصفحه</h3>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{url("admin/pages/update/".$page->id)}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label class="form-label" for="exampleInputEmail1">عنوان الصفحه</label>
                                    <input type="text" name="title" value="{{$page->title_en}}" class="form-control" id="exampleInputname"  placeholder="عنوان الصفحه" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="exampleInputEmail1">عنوان الصفحه بالعربى</label>
                                    <input type="text" name="title_ar" value="{{$page->title_ar}}" class="form-control" id="exampleInputEmail2" placeholder="عنوان الصفحه بالعربى" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="exampleInputPassword1">مسار الصفحه</label>
                                    <input type="text" name="slug" value="{{$page->slug}}" class="form-control" id="exampleInputPassword2" placeholder="مسار الصفحه" required>
                                </div>


                                <div class="row row-cards">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="card-title">محتوي الصفحة :</div>
                                            </div>
                                            <div class="card-body">
                                                <textarea  class="content" name="description" required>{{$page->description_en}}</textarea>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="card-title">محتوي الصفحة بالعربي:</div>
                                            </div>
                                            <div class="card-body">
                                                <textarea class="content2" name="description_ar" required>{{$page->description_ar}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="form-group">
                                    <label class="form-label" for="exampleInputPassword1">الصوره :</label>
                                    <img src="{{url($page->main_image)}}" width="150px" height="150px">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="main_image" required>
                                        <label class="custom-file-label">Choose file</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label">الكلمات الدلاليه</label>
                                    <textarea class="form-control" name="keywords" rows="4" placeholder="الكلمات الدلاليه" required>{{$page->keywords}}</textarea>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-form-label">لون خلفية السيكشن :</label>
                                            <input class="form-control" id="colorpicker" value="{{$page->background_color}}" name="background_color" type="color" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group ">

                                            <label class="form-label">
                                                يظهر في الرئيسية؟:</label>

                                            <select name="in_home" class="form-control" required>
                                                <option value="1" selected>نعم</option>
                                                <option value="0">لا </option>

                                            </select>

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group ">

                                            <label class="form-label">
                                                اختر اذا كانت صفحة ام خدمة :</label>

                                            <select name="type" class="form-control" required>
                                                <option value="page" selected>page</option>
                                                <option value="service">service</option>

                                            </select>

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group ">

                                            <label class="form-label">
                                                انميشن الصورة:</label>

                                            <select name="animation_image" class="form-control" required>
                                                <option value="right_to_left" selected>slide from top to left</option>
                                                <option value="top_to_bottom">slide from top to bottom </option>

                                            </select>

                                        </div>
                                    </div>



                                </div>


                                <div class="form-group mb-0">
                                    <div class="checkbox checkbox-secondary">
                                        <button type="submit"  class="btn btn-info btn-block ">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <!-- end row -->

        </div>
    </div>

@endsection
