
@extends("layouts.admin.app")
@section("content")


<div class="app-content my-3 my-md-5">
    <div class="side-app">
        <div class="page-header">
            <h4 class="page-title">لإعدادات العامه</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">الإعدادات</a></li>
                <li class="breadcrumb-item active" aria-current="page">إعدادات الموقع</li>
            </ol>
        </div>
        <!--/Page-Header-->

        <div class="row">
            <div class="container col-xl-12">
                <div class="card m-b-20">
                    <div class="card-header">
                        <h3 class="card-title">الإعدادات</h3>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{route("settings.update")}}">
                            @csrf
                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">Phone Number</label>
                                <input type="text" name="phone" class="form-control" value="{{$settings->phone}}" id="exampleInputname"  placeholder="Phone Number">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">Address Saudi Arabia</label>
                                <input type="text" name="address"  class="form-control" value="{{$settings->address}}" id="exampleInputEmail2" placeholder="Address Saudi Arabia">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="exampleInputPassword1">Google Map Link </label>
                                <input type="text" name="google_map" class="form-control" value="{{$settings->google_map}}" id="exampleInputPassword2" placeholder="Google Map Link ">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Email Website</label>
                                <input class="form-control"   name="site" value="{{$settings->site}}" placeholder="Email Website">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="exampleInputPassword1">copyright</label>
                                <input type="text" name="copyright" class="form-control" value="{{$settings->copyright}}" id="exampleInputnumber" placeholder="copyright">
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="exampleInputPassword1">Facebook Url</label>
                                <input type="text" name="facebook" class="form-control" value="{{$settings->facebook}}" id="exampleInputnumber" placeholder="Facebook Url">
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="exampleInputPassword1">Twitter Url</label>
                                <input type="text" name="twitter" class="form-control" value="{{$settings->twitter}}" id="exampleInputnumber" placeholder="Twitter Url">
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="exampleInputPassword1">Instgram Url</label>
                                <input type="text" name="intgram" class="form-control" value="{{$settings->intgram}}" id="exampleInputnumber" placeholder="Instgram Url">
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="exampleInputPassword1">Linkedin Url</label>
                                <input type="text" name="linkedin" class="form-control" value="{{$settings->linkedin}}" id="exampleInputnumber" placeholder="Linkedin Url">
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
