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
                <h1 class="page-title">Update User Roles</h1>
                <div class="card shadow mb-6">
                <table class="table datatables" id="dataTable-1">
                    <tr>
                        <th>Id</th><td>{{$data -> id}}</td>
                    </tr>
                    <tr>
                        <th>Name</th><td>{{$data -> name}}</td>
                    </tr>
                    <tr>
                        <th>Email</th><td>{{$data -> email}}</td>
                    </tr>
                    <tr>
                        <th>Roles</th>
                        <td>
                            <table>
                                @foreach($data->roles as $row)
                                    <tr>
                                        <td>{{$row->name}}</td>
                                        <td><a href="{{route('admin_user_role_delete',['userid'=>$data->id,'roleid'=>$row->id])}}" onclick="return confirm('Delete! Are you sure?')">
                                            <div class="p-3">
                                                    <span class="fe fe-24 fe-edit"></span>
                                                </div><span class="small text-muted"></span>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <th>Add Roles</th>
                        <td>
                            <form role="form" action="{{route('admin_user_role_add',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <select name="roleid">
                                    @foreach($datalist as $rs)
                                        <option value="{{$rs->id}}">{{$rs->name}}</option>
                                    @endforeach
                                </select>
                                <button type="submit" class="btn btn-primary">Add Role</button>
                            </form>
                        </td>
                    </tr>
                </table>
                </div>
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
</main> <!-- main -->
</div> <!-- .wrapper -->

</body>
</html>
