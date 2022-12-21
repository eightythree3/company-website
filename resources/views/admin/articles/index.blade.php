@extends("layouts.admin.app")
@section("content")

<div class="app-content my-3 my-md-5">
    <div class="side-app">
        <div class="page-header">
            <h4 class="page-title">المقالات</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">المقالات</a></li>
                <li class="breadcrumb-item active" aria-current="page">جميع المقالات</li>
            </ol>
        </div>
        <!--/Page-Header-->

        <div class="row">

            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">المقالات </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example2" class="hover table-bordered border-top-0 border-bottom-0" >
                                <thead>
                                <tr>
                                    <th>العنوان بالعربى</th>
{{--                                    <th>العنوان بالإنجليزي</th>--}}
                                    <th>الوصف بالعربى</th>
{{--                                    <th>الوصف بالإنجليزي</th>--}}
                                    <th>الميديا</th>
                                    <th>تفاعل</th>

                                </tr>
                                </thead>
                                <tbody>
                               @foreach($articles as $article)
                                <tr>
                                    <td style="width: 18%;">{{$article->title_ar}}</td>
{{--                                    <td>{{$article->title}}</td>--}}
                                    <td style="width: 45%;">{{substr($article->description_ar,0,75)}}</td>
{{--                                    <td>{{$article->description}}</td>--}}
                                    <td  style="width: 13%;"><img src="{{$article->image}}" width="120px" height="120px"></td>

                                    <td  style="width: 20%;"><a href="{{url("admin/articles/edit/".$article->id)}}" class="btn btn-info fa fa-edit">  تعديل </a>
                                        <a href="#"  onclick="popUpConfirmDelete({{$article->id}})" class="btn btn-danger fa fa-trash"> حذف </a>
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
                        <h3 class="modal-title text-danger" style="font-family: 'ab';text-align: center">هل تريد  حذف هذا المقال  !</h3>
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
            url : "{{url('/admin/articles/delete/')}}"+"/"+user_id,
            type : 'GET',
            success:function (){
                location.reload();

            }

        })
    }
</script>

    @endsection
