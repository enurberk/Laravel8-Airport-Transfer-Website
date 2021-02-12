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
                <h1 class="page-title">Update Reservations</h1>
                @include('home.message')
        <div class="card shadow mb-6">
            <form action="{{route('admin_rezervation_update', ['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                <table class="table datatables" id="dataTable-1">
                    <tr>
                        <th>Reservation Id</th><td>{{$data -> id}}</td>
                    </tr>
                    <tr>
                        <th>User Name</th><td>{{$data -> user -> name}}</td>
                    </tr>
                    <tr>
                        <th>Address</th><td>{{$data -> user ->address}}</td>
                    </tr>
                    <tr>
                        <th>Vehicle</th><td>{{$data -> transfer -> title}}</td>
                    </tr>
                    <tr>
                        <th>Pick Up Location</th><td>{{$data -> pick_up_location}}</td>
                    </tr>
                    <tr>
                        <th>Drop Off Location</th><td>{{$data -> drop_off_location}}</td>
                    </tr>
                    <tr>
                        <th>Price</th><td>{{$data -> price}}</td>
                    </tr>
                    <tr>
                        <th>Pick Up Date</th><td>{{$data -> pick_up_date}}</td>
                    </tr>
                    <tr>
                        <th>Pick Up Time</th><td>{{$data -> pick_up_time}}</td>
                    </tr>
                    <tr>
                        <th>IP</th><td>{{$data -> ip}}</td>
                    </tr>
                    <tr>
                        <th>Created Date</th><td>{{$data -> created_at}}</td>
                    </tr>
                    <tr>
                        <th>Updated Date</th><td>{{$data -> updated_at}}</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>
                            <select name="status">
                                <option selected>{{$data -> status}}</option>
                                <option selected>Rejected</option>
                                <option selected>Pending</option>
                                <option selected>Accepted</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>Admin Note:</th>
                        <td>
                            <textarea name="note" rows="3" cols="30">{{$data -> updated_at}}</textarea>
                        </td>
                    </tr>
                </table>
                <button type="submit" class="btn btn-primary">Update Reservation</button>
                </form>
                </div>
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
</main> <!-- main -->
</div> <!-- .wrapper -->

</body>
</html>
