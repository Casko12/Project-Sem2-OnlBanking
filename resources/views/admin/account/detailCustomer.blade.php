@extends("admin.layout")
@section("custom_css")
    <link rel="stylesheet" href="admin/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="admin/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
@endsection
@section("custom_js")
    <script src="admin/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="admin/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="admin/dist/js/demo.js"></script>
    <script>

        function passed(id){
            $.ajax({
                url: '{{url("/admin/account/listcustomer/")}}'+id,
                method:"get"

            })
          }
{{--    </script>--}}
{{--    <script>--}}
        function notPassed(){
            {{$user->update(["status"=>0,])}}}
    </script>

@endsection
@section("main_content")
    <!-- Profile Image -->
    <div class="card card-primary card-outline">
        <div class="card-body box-profile">
            <div class="text-center">
                <img class="profile-user-img img-fluid img-circle"
                     src="{{$user->image_face}}"
                     alt="User profile picture">
            </div>

            <h3 class="profile-username text-center">{{$user->name}}</h3>




        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

    <!-- About Me Box -->
    <div class="card card-primary">

        <!-- /.card-header -->
        <div class="card-body">
            <p class="text-muted">
                {{$user->email}}
            </p>
            <hr>
            <p class="text-muted">
                {{$user->address}}
            </p>
            <hr>
            <p class="text-muted">
                {{$user->telephone}}
            </p>
            <hr>
            <p class="text-muted">
                {{$user->national_id}}
            </p>
            <hr>
            <p class="text-muted">
                {{$user->birthday}}
            </p>
            <hr>
            <p class="text-muted">
                <img width="100" src="{{$user->image_id1}}"/>
            </p>
            <hr>
            <p class="text-muted">
                <img width="100" src="{{$user->image_id2}}"/>
            </p>
            <hr>
            <p class="text-muted">
                {{$user->created_at}}
            </p>


    </div>
        <!-- /.card-body -->

    </div>
    <form action="{{url("/admin/account/listcustomer",["user"=>$user->id])}}" method="post">
        @csrf
    <div class="col-md-12">
        <div class="col-md-5">
            <button type="submit" value="0" name="passed" class="btn btn-danger" style="float:left;">Not Passed</button>
        </div>
        <div class="col-md-5">
            <a href="{{url("admin/account/edit",["user"=>$user->id])}}" class="btn btn-primary"style="float:left;">Edit</a>
        </div>

        <div class="col-md-5">
            <button type="submit" value="1" name="passed"  class="btn btn-primary" style="float: left;">Passed</button>
        </div>

    </div>
    </form>
    <!-- /.card -->
@endsection

