
@auth
<div class="sidebar-left">
    <ul class="list-group-item">
        <h3 class="align-items-center"><strong style="color: black;">User Panel</strong></h3><hr>
        <li><a href="{{ route('myprofile') }}">My Profile</a></li>
        <li><a href="{{route('user_rezervation')}}">My Rezervations</a></li>
        <li><a href="{{ route('logout') }}">Logout</a></li>
        @php
            $userRoles = Auth::user()->roles->pluck('name');
        @endphp
        @if($userRoles->contains('admin'))
            <li><a href="{{ route('admin_home') }}">Admin Panel</a></li>
        @endif
    </ul>
</div>
@endauth
