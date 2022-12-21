@extends("layouts.admin.app")
@section("content")

    <div class="app-content my-3 my-md-5">
        <div class="side-app">
            <div class="page-header">
                <h4 class="page-title">الصفحات</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">الرئيسيه</a></li>
                    <li class="breadcrumb-item active" aria-current="page">الصفحات</li>
                </ol>
            </div>
            <!--/Page-Header-->

            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">الصفحات</div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="table table-striped table-bordered" >
                                    <thead>
                                    <tr>
                                        <th class="wd-15p">رقم الصفحه</th>
                                        <th class="wd-15p">عنوان الصفحه</th>
                                        <th class="wd-20p">إختر إذا كانت صفحه ام خدمه</th>
                                        <th class="wd-15p">الصوره</th>
                                        <th class="wd-10p">action</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($pages as $page)
                                    <tr>
                                        <td style="width: 14%">{{$page->id}}</td>
                                        <td  style="width: 25%">{{$page->title_ar}}</td>
                                        <td  style="width: 14%">{{$page->type}}</td>
                                        <td  style="width: 25%" class="text-center"><img src="{{url($page->main_image)}}" width="125px" height="125px"></td>

                                        <td><a href="{{url("admin/pages/update/".$page->id)}}" class="btn btn-info fa fa-edit">  تعديل </a>
                                            <a href="#" onclick="popUpConfirmDelete({{$page->id}})" class="btn btn-danger fa fa-trash"> حذف </a>
                                        </td>
                                    </tr>




                                @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- table-wrapper -->
                    </div>
                    <!-- section-wrapper -->
                </div>

            </div>
            <div class="modal" id="confirmDelete" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">

                        <div class="modal-body" style="padding: 40px">
                            <h3 class="modal-title text-danger" style="font-family: 'ab';text-align: center">هل تريد  حذف هذه الصفحه  !</h3>
                            <input type="hidden" id="page_id">
                        </div>

                        <div class="modal-footer">
                            <button type="button" onclick="deleteUser()" class="btn btn-danger"><span id="text_delete"> حذف</span>  <span class="loader_area"></span></button>
                            <button type="button" class="btn btn-info" data-dismiss="modal">لا أريد</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>

        function popUpConfirmDelete(id){
            $('#page_id').val(id);
            $('#confirmDelete').fadeIn(450).modal({'show' : true});
        }
        function deleteUser(){
            var page_id = $('#page_id').val();
            $('.loader_area').html('<i class="fa fa-spinner fa-pulse fa-1x fa-fw"></i><span class="sr-only">Loading...</span>');
            $('#text_delete').html(' جارى الحذف  ');
            $.ajax({
                url : "{{url('/admin/pages/delete/')}}"+"/"+page_id,
                type : 'GET',
                success:function (){
                    location.reload();

                }

            })
        }
    </script>
    @endsection

