@extends('layouts.admin')

@section('title','Edit Setting')
@section('javascript')
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
@endsection()
@section('content')

<div class="wrapper">
    <main role="main" class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="page-title">Edit Setting</h1>
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->

        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="{{route('admin_setting_update')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">

            <div class="col-md-12">
                        <ul class="nav nav-pills nav-fill mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-general-tab" data-toggle="pill" href="#pills-general" role="tab" aria-controls="pills-home" aria-selected="true">General</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-smtp-tab" data-toggle="pill" href="#pills-smtp" role="tab" aria-controls="pills-profile" aria-selected="false">Smtp Email</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-social-tab" data-toggle="pill" href="#pills-social" role="tab" aria-controls="pills-contact" aria-selected="false">Social Media</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-aboutus-tab" data-toggle="pill" href="#pills-aboutus" role="tab" aria-controls="pills-contact" aria-selected="false">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-services-tab" data-toggle="pill" href="#pills-services" role="tab" aria-controls="pills-contact" aria-selected="false">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-vehicles-tab" data-toggle="pill" href="#pills-vehicles" role="tab" aria-controls="pills-contact" aria-selected="false">Vehicles</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-blog-tab" data-toggle="pill" href="#pills-blog" role="tab" aria-controls="pills-contact" aria-selected="false">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-references-tab" data-toggle="pill" href="#pills-references" role="tab" aria-controls="pills-contact" aria-selected="false">References</a>
                            </li>
                        </ul>
                        <div class="tab-content mb-1" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-general" role="tabpanel" aria-labelledby="pills-general-tab">
                                <input type="hidden" id="id" name="id" value="{{$data->id}}" class="form-control">
                                <div class="form-group col-md-6">
                                    <label>Title</label>
                                    <input type="text" id="title" name="title" value="{{$data->title}}" class="form-control">
                                </div>

                            <div class="form-group">
                                <div class="form-group col-md-6">
                                    <label>Keywords</label>
                                    <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-group col-md-6">
                                    <label>Description</label>
                                    <input type="text" name="description" value="{{$data->description}}" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-group col-md-6">
                                    <label>Company</label>
                                    <input type="text" name="company" value="{{$data->company}}" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-group col-md-6">
                                    <label>Address</label>
                                    <input type="text" name="address" value="{{$data->address}}" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-group col-md-6">
                                    <label>Phone</label>
                                    <input type="text" name="phone" value="{{$data->phone}}" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-group col-md-6">
                                    <label>Fax</label>
                                    <input type="text" name="fax" value="{{$data->fax}}" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-group col-md-6">
                                    <label>Email</label>
                                    <input type="text" name="email" value="{{$data->email}}" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-group col-md-6">
                                    <label>Status</label>
                                    <select name="status" class="form-control">
                                        <option selected="selected">{{$data->status}}</option>
                                        <option>True</option>
                                        <option>False</option>
                                    </select>
                                </div>
                            </div>
                            </div>
                            <div class="tab-pane fade" id="pills-smtp" role="tabpanel" aria-labelledby="pills-smtp-tab">
                                <div class="form-group">
                                    <div class="form-group col-md-6">
                                        <label>Smtp Server</label>
                                        <input type="text" name="smtpserver" value="{{$data->smtpserver}}" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group col-md-6">
                                        <label>Smtp Email</label>
                                        <input type="text" name="smtpemail" value="{{$data->smtpemail}}" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group col-md-6">
                                        <label>Smtp Password</label>
                                        <input type="password" name="smtppassword" value="{{$data->smtppassword}}" class="form-control">
                                    </div>
                                </div>    <div class="form-group">
                                    <div class="form-group col-md-6">
                                        <label>Smtp Port</label>
                                        <input type="number" name="smtpport" value="{{$data->smtpport}}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-social" role="tabpanel" aria-labelledby="pills-contact-tab">
                                <div class="form-group">
                                    <div class="form-group col-md-6">
                                        <label>Facebook</label>
                                        <input type="text" name="facebook" value="{{$data->facebook}}" class="form-control">
                                    </div>
                                </div>    <div class="form-group">
                                    <div class="form-group col-md-6">
                                        <label>Instagram</label>
                                        <input type="text" name="instagram" value="{{$data->instagram}}" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group col-md-6">
                                        <label>Twitter</label>
                                        <input type="text" name="twitter" value="{{$data->twitter}}" class="form-control">
                                    </div>
                                </div>    <div class="form-group">
                                    <div class="form-group col-md-6">
                                        <label>Youtube</label>
                                        <input type="text" name="youtube" value="{{$data->youtube}}" class="form-control">
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="pills-aboutus" role="tabpanel" aria-labelledby="pills-contact-tab">
                                <div class="form-group">
                                    <div class="form-group col-md-6">
                                        <label>About Us</label>
                                        <textarea id="aboutus" name="aboutus">{{$data->aboutus}}</textarea>
                                    </div>
                                    <script>
                                        $('#aboutus').summernote({
                                            placeholder: 'Hello stand alone ui',
                                            tabsize: 2,
                                            height: 120,
                                            toolbar: [
                                                ['style', ['style']],
                                                ['font', ['bold', 'underline', 'clear']],
                                                ['color', ['color']],
                                                ['para', ['ul', 'ol', 'paragraph']],
                                                ['table', ['table']],
                                                ['insert', ['link', 'picture', 'video']],
                                                ['view', ['fullscreen', 'codeview', 'help']]
                                            ]
                                        });
                                    </script>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                <div class="form-group">
                                <div class="form-group col-md-6">
                                    <label>Contact</label>
                                    <textarea id="contact" name="contact">{{$data->contact}}</textarea>
                                </div>
                                    <script>
                                        $('#contact').summernote({
                                            placeholder: 'Hello stand alone ui',
                                            tabsize: 2,
                                            height: 120,
                                            toolbar: [
                                                ['style', ['style']],
                                                ['font', ['bold', 'underline', 'clear']],
                                                ['color', ['color']],
                                                ['para', ['ul', 'ol', 'paragraph']],
                                                ['table', ['table']],
                                                ['insert', ['link', 'picture', 'video']],
                                                ['view', ['fullscreen', 'codeview', 'help']]
                                            ]
                                        });
                                    </script>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-services" role="tabpanel" aria-labelledby="pills-contact-tab">
                                <div class="form-group">
                                    <div class="form-group col-md-6">
                                        <label>Services</label>
                                        <textarea id="services" name="services">{{$data->services}}</textarea>
                                    </div>
                                    <script>
                                        $('#services').summernote({
                                            placeholder: 'Hello stand alone ui',
                                            tabsize: 2,
                                            height: 120,
                                            toolbar: [
                                                ['style', ['style']],
                                                ['font', ['bold', 'underline', 'clear']],
                                                ['color', ['color']],
                                                ['para', ['ul', 'ol', 'paragraph']],
                                                ['table', ['table']],
                                                ['insert', ['link', 'picture', 'video']],
                                                ['view', ['fullscreen', 'codeview', 'help']]
                                            ]
                                        });
                                    </script>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-vehicles" role="tabpanel" aria-labelledby="pills-contact-tab">
                                <div class="form-group">
                                    <div class="form-group col-md-6">
                                        <label>Vehicles</label>
                                        <textarea id="vehicles" name="vehicles">{{$data->vehicles}}</textarea>
                                    </div>
                                    <script>
                                        $('#vehicles').summernote({
                                            placeholder: 'Hello stand alone ui',
                                            tabsize: 2,
                                            height: 120,
                                            toolbar: [
                                                ['style', ['style']],
                                                ['font', ['bold', 'underline', 'clear']],
                                                ['color', ['color']],
                                                ['para', ['ul', 'ol', 'paragraph']],
                                                ['table', ['table']],
                                                ['insert', ['link', 'picture', 'video']],
                                                ['view', ['fullscreen', 'codeview', 'help']]
                                            ]
                                        });
                                    </script>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-blog" role="tabpanel" aria-labelledby="pills-contact-tab">
                                <div class="form-group">
                                <div class="form-group col-md-6">
                                    <label>Blog</label>
                                    <textarea id="blog" name="blog">{{$data->blog}}</textarea>
                                </div>
                                <script>
                                    $('#blog').summernote({
                                        placeholder: 'Hello stand alone ui',
                                        tabsize: 2,
                                        height: 120,
                                        toolbar: [
                                            ['style', ['style']],
                                            ['font', ['bold', 'underline', 'clear']],
                                            ['color', ['color']],
                                            ['para', ['ul', 'ol', 'paragraph']],
                                            ['table', ['table']],
                                            ['insert', ['link', 'picture', 'video']],
                                            ['view', ['fullscreen', 'codeview', 'help']]
                                        ]
                                    });
                                </script>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-references" role="tabpanel" aria-labelledby="pills-contact-tab">
                                <div class="form-group">
                                <div class="form-group col-md-6">
                                    <label>References</label>
                                    <textarea id="references" name="references">{{$data->references}}</textarea>
                                </div>
                                <script>
                                    $('#references').summernote({
                                        placeholder: 'Hello stand alone ui',
                                        tabsize: 2,
                                        height: 120,
                                        toolbar: [
                                            ['style', ['style']],
                                            ['font', ['bold', 'underline', 'clear']],
                                            ['color', ['color']],
                                            ['para', ['ul', 'ol', 'paragraph']],
                                            ['table', ['table']],
                                            ['insert', ['link', 'picture', 'video']],
                                            ['view', ['fullscreen', 'codeview', 'help']]
                                        ]
                                    });
                                </script>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Update Setting</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>



    <div class="modal fade modal-notif modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="defaultModalLabel">Notifications</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="list-group list-group-flush my-n3">
                        <div class="list-group-item bg-transparent">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="fe fe-box fe-24"></span>
                                </div>
                                <div class="col">
                                    <small><strong>Package has uploaded successfull</strong></small>
                                    <div class="my-0 text-muted small">Package is zipped and uploaded</div>
                                    <small class="badge badge-pill badge-light text-muted">1m ago</small>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item bg-transparent">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="fe fe-download fe-24"></span>
                                </div>
                                <div class="col">
                                    <small><strong>Widgets are updated successfull</strong></small>
                                    <div class="my-0 text-muted small">Just create new layout Index, form, table</div>
                                    <small class="badge badge-pill badge-light text-muted">2m ago</small>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item bg-transparent">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="fe fe-inbox fe-24"></span>
                                </div>
                                <div class="col">
                                    <small><strong>Notifications have been sent</strong></small>
                                    <div class="my-0 text-muted small">Fusce dapibus, tellus ac cursus commodo</div>
                                    <small class="badge badge-pill badge-light text-muted">30m ago</small>
                                </div>
                            </div> <!-- / .row -->
                        </div>
                        <div class="list-group-item bg-transparent">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="fe fe-link fe-24"></span>
                                </div>
                                <div class="col">
                                    <small><strong>Link was attached to menu</strong></small>
                                    <div class="my-0 text-muted small">New layout has been attached to the menu</div>
                                    <small class="badge badge-pill badge-light text-muted">1h ago</small>
                                </div>
                            </div>
                        </div> <!-- / .row -->
                    </div> <!-- / .list-group -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Clear All</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade modal-shortcut modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="defaultModalLabel">Shortcuts</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body px-5">
                    <div class="row align-items-center">
                        <div class="col-6 text-center">
                            <div class="squircle bg-success justify-content-center">
                                <i class="fe fe-cpu fe-32 align-self-center text-white"></i>
                            </div>
                            <p>Control area</p>
                        </div>
                        <div class="col-6 text-center">
                            <div class="squircle bg-primary justify-content-center">
                                <i class="fe fe-activity fe-32 align-self-center text-white"></i>
                            </div>
                            <p>Activity</p>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-6 text-center">
                            <div class="squircle bg-primary justify-content-center">
                                <i class="fe fe-droplet fe-32 align-self-center text-white"></i>
                            </div>
                            <p>Droplet</p>
                        </div>
                        <div class="col-6 text-center">
                            <div class="squircle bg-primary justify-content-center">
                                <i class="fe fe-upload-cloud fe-32 align-self-center text-white"></i>
                            </div>
                            <p>Upload</p>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-6 text-center">
                            <div class="squircle bg-primary justify-content-center">
                                <i class="fe fe-users fe-32 align-self-center text-white"></i>
                            </div>
                            <p>Users</p>
                        </div>
                        <div class="col-6 text-center">
                            <div class="squircle bg-primary justify-content-center">
                                <i class="fe fe-settings fe-32 align-self-center text-white"></i>
                            </div>
                            <p>Settings</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main> <!-- main -->
</div> <!-- .wrapper -->
@endsection
