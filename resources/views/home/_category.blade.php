@php
    $parentCategories = \App\Http\Controllers\HomeController::categoryList()
@endphp
<!-- header -->
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light top-header">
        <button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                    <a class="nav-link ml-lg-0" href="{{route('home')}}">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="booking.html">Booking</a>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        Our Services
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item text-center" href="services.html">Services</a>
                        <a class="dropdown-item text-center" href="_vehicles.html">Vehicles</a>
                       @foreach($parentCategories as $rs)
                            <ul class="navbar-nav mx-auto">
                                <li  style="color: black;font-family:'Arial Black'" class="nav-link dropdown-toggle">
                                    {{$rs->title}}
                                    <ul>
                                        @if(count($rs->children))
                                            @include('home.categorytree', ['children' => $rs->children])
                                        @endif
                                    </ul>
                                </li>
                            </ul>
                      @endforeach
                    </div>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="_faq.html">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="_blog.html">Blog</a>
                </li>
            </ul>

        </div>
    </nav>
</header>
<!-- //header -->
