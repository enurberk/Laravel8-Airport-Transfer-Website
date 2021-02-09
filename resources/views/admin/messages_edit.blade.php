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
                    <div class="card shadow mb-6">
                        <div class="card-header">
                            <strong class="card-title">Message Detail</strong>
                            @include('home.message')
                        </div>
                    </div>
                    <br>
                    <div class="row my-xl-4">
                        <!-- Small table -->
                        <div class="col-md-6">
                            <div class="card shadow">
                                <form action="{{route('admin_message_update', ['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                <div class="card-body">
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
                                            <th>Phone</th><td>{{$data -> phone}}</td>
                                        </tr>
                                        <tr>
                                            <th>Subject</th><td>{{$data -> subject}}</td>
                                        </tr>
                                        <tr>
                                            <th>Message</th><td>{{$data -> message}}</td>
                                        </tr>
                                        <tr>
                                            <th>Admin Note</th>
                                            <td>
                                                <textarea id="detail" name="note">{{$data -> note}}</textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <button type="submit" class="btn btn-primary">Upload Message</button>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                </form>
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
