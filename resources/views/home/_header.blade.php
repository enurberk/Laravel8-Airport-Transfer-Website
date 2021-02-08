<!--/banner-->
<div class="top-bar_sub_w3layouts container-fluid">
    <div class="row">
        <div class="col-md-3 col-sm-6 log-icons mt-2">
            <p class="py-2"><i class="fas fa-phone"></i> Call Us :  444 14 42 </p>
        </div>

        <div class="col-md-6 col-sm-6 logo">
            <a class="navbar-brand" href="{{route('home')}}">
                <i class="fas fa-taxi"></i> Istanbul Airport Transfer </a>
        </div>


            @auth()
            <div class="col-md-3 top-forms mt-md-3 mt-2 mb-md-0 mb-3">
				<span>
					<a href="{{ route('myprofile') }}">{{ Auth::user()->name }}</a>
                    <a href="{{route('logout')}}">Logout</a>
				</span>
            </div>
            @endauth

            @guest()
            <div class="col-md-3 top-forms mt-md-3 mt-2 mb-md-0 mb-3">
                <span>
						<a href="/login">Login</a> <a href="/register">Register</a>
				</span>
            </div>
            @endguest
        </div>
        </div>
    </div>
</div>

<div class="banner" id="home">


    <!-- login and register modal
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sign In to your account</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">User Name</label>
                            <input type="text" class="form-control" placeholder="User Name" name="Name" id="recipient-name" required="">
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-form-label">Password</label>
                            <input type="password" class="form-control" placeholder="Password" name="Password" id="password" required="">
                        </div>
                        <div class="row sub-w3l my-3">
                            <div class="col sub-agile">
                                <input type="checkbox" id="brand1" value="">
                                <label for="brand1" class="text-white">
                                    <span></span>Remember me?</label>
                            </div>
                            <div class="col forgot-w3l text-right">
                                <a href="#" class="text-white">Forgot Password?</a>
                            </div>
                        </div>
                        <div class="right-w3l">
                            <input type="submit" class="form-control" value="Sign In">
                        </div>
                        <p class="text-center dont-do text-white mt-3">Don't have an account?
                            <a href="#" data-toggle="modal" data-target="#exampleModal1" class="text-white">
                                Register Now</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Register your account</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">User Name</label>
                            <input type="text" class="form-control" placeholder="User Name" name="Name" id="recipient-rname" required="">
                        </div>
                        <div class="form-group">
                            <label for="recipient-email" class="col-form-label">Email</label>
                            <input type="email" class="form-control" placeholder="Email" name="Email" id="recipient-email" required="">
                        </div>
                        <div class="form-group">
                            <label for="password1" class="col-form-label">Password</label>
                            <input type="password" class="form-control" placeholder="Password" name="Password" id="password1" required="">
                        </div>
                        <div class="form-group">
                            <label for="password2" class="col-form-label">Confirm Password</label>
                            <input type="password" class="form-control" placeholder="Confirm Password" name="Confirm Password" id="password2" required="">
                        </div>
                        <div class="sub-w3l">
                            <div class="sub-agile">
                                <input type="checkbox" id="brand2" value="">
                                <label for="brand2" class="mb-3">
                                    <span></span>I Accept to the Terms & Conditions</label>
                            </div>
                        </div>
                        <div class="right-w3l">
                            <input type="submit" class="form-control" value="Register">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    //login and register modal -->
