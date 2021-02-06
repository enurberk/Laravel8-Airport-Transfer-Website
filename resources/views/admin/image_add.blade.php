<html>
<head>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/css/simplebar.css">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/css/feather.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/css/select2.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/css/dropzone.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/css/uppy.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/css/jquery.steps.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/css/jquery.timepicker.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/css/quill.snow.css">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/css/daterangepicker.css">
    <!-- App CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/css/app-light.css" id="lightTheme" disabled>
    <link rel="stylesheet" href="{{asset('assets')}}/admin/css/app-dark.css" id="darkTheme">
</head>


<body>
<div class="wrapper">
    <main role="main" class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="page-title">Add Image</h1>

        <div class="card shadow mb-6">
            <div class="card-header">
                <strong class="card-title">Transfer : {{$data->title}}</strong>
            </div>
            <form action="{{route('admin_image_store', ['transfer_id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <div class="form-group col-md-6">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group col-md-6">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Add Image</button>
                </form>
        </div>
                <br>
            <div class="row my-xl-4">
                <!-- Small table -->
                <div class="col-md-6">
                    <div class="card shadow">
                        <div class="card-body">
                            <table class="table datatables" id="dataTable-1">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                <tbody>
                                    @foreach($images as $rs)
                                    <tr>
                                        <td>{{$rs -> id}}</td>
                                        <td>{{$rs -> title}}</td>
                                        <td>
                                            @if($rs -> image)
                                                <img src="{{Storage::url($rs -> image)}}" height="60" alt="">
                                            @endif
                                        </td>
                                        <td><a href="{{route('admin_image_delete', ['id' => $rs->id, 'transfer_id'=>$data->id])}}" onclick="return confirm('Record will be delete! Are you sure?')">
                                        <div class="p-3">
                                            <span class="fe fe-24 fe-delete"></span>
                                        </div><span class="small text-muted"></span>
                                        </a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->

</main> <!-- main -->
</div> <!-- .wrapper -->

</body>
</html>
