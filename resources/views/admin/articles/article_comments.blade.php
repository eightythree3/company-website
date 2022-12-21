@extends("layouts.admin.app")
@section("content")

    <div class="app-content my-3 my-md-5">
        <div class="side-app">
            <div class="page-header">
                <h4 class="page-title">المقالات</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">المقالات</a></li>
                    <li class="breadcrumb-item active" aria-current="page">جميع تعليقات المقالات</li>
                </ol>
            </div>
            <!--/Page-Header-->
            @if(session()->has("success_commit"))
         <div class="alert alert-success" style="height: 45px">
             <span class="card-title" style="float: right">{{session()->get("success_commit")}}</span>
         </div>
            @endif

            @if(session()->has("success_delete"))
                <div class="alert alert-warning" style="height: 45px">
                    <span style="float: right">{{session()->get("success_delete")}}</span>
                </div>
            @endif
            <div class="row">

                <div class="col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">التعليقات </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example2" class="hover table-bordered border-top-0 border-bottom-0" >
                                    <thead>
                                    <tr>
                                        <th>عنوان المقال</th>
                                        {{--                                    <th>العنوان بالإنجليزي</th>--}}
                                        <th>التعليق</th>
                                        {{--                                    <th>الوصف بالإنجليزي</th>--}}

                                        <th>تفاعل</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($articles_comments as $article_comment)
                                        <tr>
                                            <td style="width: 18%;">{{$article_comment->article->title_ar}}</td>
                                          
                                            <td style="width: 50%;">{{$article_comment->comment}}</td>


                                            <td  style="width: 18%;"><a href="{{url("admin/article/comment/verify/".$article_comment->id)}}" class="btn btn-success fa fa-check">  عرض </a>
                                                <a href="#"  onclick="popUpConfirmDelete({{$article_comment->id}})" class="btn btn-danger fa fa-trash"> حذف </a>
                                            </td>
                                        </tr>

                                    @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal" id="confirmDelete" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">

                        <div class="modal-body" style="padding: 40px">
                            <h3 class="modal-title text-danger" style="font-family: 'ab';text-align: center">هل تريد  حذف هذا التعليق  !</h3>
                            <input type="hidden" id="user_id">
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
            $('#user_id').val(id);
            $('#confirmDelete').fadeIn(450).modal({'show' : true});
        }
        function deleteUser(){
            var user_id = $('#user_id').val();
            $('.loader_area').html('<i class="fa fa-spinner fa-pulse fa-1x fa-fw"></i><span class="sr-only">Loading...</span>');
            $('#text_delete').html(' جارى الحذف  ');
            $.ajax({
                url : "{{url('/admin/article/comment/delete')}}"+"/"+user_id,
                type : 'GET',
                success:function (){
                    location.reload();

                }

            })
        }
    </script>

@endsection
