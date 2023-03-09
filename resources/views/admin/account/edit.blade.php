@extends("admin.layout")
@section("title")
    Chỉnh sửa
@endsection
@section("main_content")
    <div>
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{url("/admin/account/edit",["user"=>$user->id])}}" method="post" role="form" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    @include("admin.input",[
                        "label"=>"Name",
                        "key"=>"name",
                        "type"=>"text",
                        "required" => true,
                        "value"=>$user->name
                    ])
                    @include("admin.input",[
                         "label"=>"Mail",
                         "key"=>"email",
                         "type"=>"text",
                         "required" => true,
                         "value"=>$user->email
                     ])
                    @include("admin.input",[
                       "label"=>"Image_face",
                       "key"=>"image_face",
                       "type"=>"file",
                        "required" => false,
                         "value"=>$user->image_face
                   ])
                    @include("admin.input",[
                       "label"=>"Image_id1",
                       "key"=>"image_id1",
                       "type"=>"file",
                        "required" => false,
                         "value"=>$user->image_id1
                   ])
                    @include("admin.input",[
                       "label"=>"Image_id2",
                       "key"=>"image_id2",
                       "type"=>"file",
                        "required" => false,
                         "value"=>$user->image_id2
                   ])
                    @include("admin.input",[
                         "label"=>"Address",
                         "key"=>"address",
                         "type"=>"text",
                         "required" => true,
                         "value"=>$user->address
                     ])
                     @include("admin.input",[
                         "label"=>"Telephone",
                         "key"=>"telephone",
                         "type"=>"text",
                         "required" => true,
                         "value"=>$user->telephone
                     ])
                     @include("admin.input",[
                         "label"=>"National_ID",
                         "key"=>"national_id",
                         "type"=>"number",
                         "required" => true,
                         "value"=>$user->national_id
                     ])
                    @include("admin.input",[
                        "label"=>"Birthday",
                        "key"=>"birthday",
                        "type"=>"date",
                        "required" => true,
                        "value"=>$user->birthday
                    ])


                </div>

                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        <!-- /.card -->



    </div>
@endsection
