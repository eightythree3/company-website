@extends("layouts.admin.app")
@section("content")


    <div class="app-content my-3 my-md-5">
        <div class="side-app">
            <div class="page-header">
                <h4 class="page-title">تعديل بيانات العضو </h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">الأعضاء</a></li>
                    <li class="breadcrumb-item active" aria-current="page">تعديل بيانات العضو </li>
                </ol>
            </div>
            <!--/Page-Header-->

            <div class="row">
                <div class="container col-xl-12">
                    <div class="card m-b-20">
                        <div class="card-header">
                            <h3 class="card-title">تعديل بيانات العضو</h3>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{url("admin/members/update/".$member->id)}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label class="form-label" for="exampleInputEmail1">إسم العضو</label>
                                    <input type="text" name="name" value="{{$member->name}}" class="form-control" id="exampleInputname"  placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="exampleInputEmail1">رقم جوال العضو</label>
                                    <input type="number" name="phone" value="{{$member->phone}}" class="form-control" id="exampleInputEmail2" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="exampleInputPassword1">البريد الإلكترونى</label>
                                    <input type="email" name="email" value="{{$member->email}}" class="form-control" id="exampleInputPassword2" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="exampleInputPassword1">الرقم السرى</label>
                                    <input type="password" name="password"  class="form-control" id="exampleInputPassword2" placeholder="" >
                                </div>
                                <div class="form-group">

                                    <div class="form-group ">

                                        <label class="form-label" for="exampleInputPassword1">حاله العضو</label>

                                        <select name="status" class="form-control" required>
                                            <option value="approved" selected>مفعل</option>
                                            <option value="disapproved">غير مفعل</option>

                                        </select>

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
