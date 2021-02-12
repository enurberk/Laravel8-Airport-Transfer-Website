<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
    <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
        <i class="fe fe-x"><span class="sr-only"></span></i>
    </a>
    <nav class="vertnav navbar navbar-light">
        <!-- nav bar -->
        <div class="w-100 mb-4 d-flex">
            <!--This link open /admin page (home page) -->
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="{{route('admin_home')}}">
                <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
                <g>
                    <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                    <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                    <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                </g>
              </svg>
            </a>
        </div>
        <div class="info">

            @auth
                <!--User name and Logout links-->
                    <a href="#" data-toggle="collapse" aria-expanded="false" class="nav-link">
                        <i class="fe fe-user fe-16"></i>
                        <span class="ml-3 item-text">{{Auth::user()->name}}</span>
                    </a>
                        <a href="{{route('logout')}}" aria-expanded="false" class="nav-link">
                            <i class="fe fe-16 fe-log-out"></i>
                            <span class="ml-3 item-text">Logout</span>
                        </a>
                    </a>
            @endauth

        </div>

        <!--Category-->
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a href="{{route('admin_category')}}" class=" nav-link">
                    <i class="fe fe-home fe-16"></i>
                    <span class="ml-3 item-text"></span>
                    Category
                </a>
            </li>
        </ul>

        <!--Tranfer-->
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a href="{{route('admin_transfers')}}" class="nav-link">
                    <i class="fe fe-home fe-16"></i>
                    <span class="ml-3 item-text"></span>
                    Transfer
                </a>
            </li>
        </ul>

        <!--Setting-->
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a href="{{route('admin_setting')}}" class="nav-link">
                    <i class="fe fe-16 fe-settings"></i>
                    <span class="ml-3 item-text"></span>
                    Setting
                </a>
            </li>
        </ul>

        <!--Contact Message-->
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a href="{{route('admin_message')}}" class="nav-link">
                    <i class="fe fe-16 fe-message-square"></i>
                    <span class="ml-3 item-text"></span>
                    Contact Message
                </a>
            </li>
        </ul>

        <!--Reservations-->
        <ul class="navbar-nav flex-fill w-100 mb-2">
        <li class="nav-item dropdown">
            <a href="#fileman" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-folder fe-16"></i>
                <span class="ml-3 item-text">Reservations</span>
            </a>
            <ul class="collapse list-unstyled pl-4 w-100" id="fileman">
                <a class="nav-link pl-3" href="{{route('admin_rezervation')}}"><span class="ml-1">All Reservations</span></a>
                <a class="nav-link pl-3" href="{{route('admin_rezervation_list',['status' => 'rejected'])}}"><span class="ml-1">Rejection Reservations</span></a>
                <a class="nav-link pl-3" href="{{route('admin_rezervation_list',['status' => 'accepted'])}}"><span class="ml-1">Accepted Reservations</span></a>
                <a class="nav-link pl-3" href="{{route('admin_rezervation_list',['status' => 'pending'])}}"><span class="ml-1">Pending Reservations</span></a>
            </ul>
        </li>
        </ul>


    </nav>
</aside>
