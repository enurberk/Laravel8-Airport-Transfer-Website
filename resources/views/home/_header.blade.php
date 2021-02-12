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
					<a href="{{ route('myprofile') }}">{{ Auth::user()->name }}  {{\Illuminate\Support\Facades\Auth::user()->roles->pluck('name')}}</a>
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

