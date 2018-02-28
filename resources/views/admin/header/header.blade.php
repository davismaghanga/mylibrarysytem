<!--Header-part-->
<div id="header">
    <h1><a href="index.html">Library Admin</a></h1>
</div>
<!--close-Header-part-->


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
    <ul class="nav">
        <li   id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" ><i class="icon icon-user"></i>  <span class="text">Welcome User</span><b class="caret"></b></a>
        </li>


        {{--<li class=""><a href="{{route('/logout')}}"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>--}}
        <li>
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
                <i class="icon icon-share-alt"></i> <span class="text">Logout</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>

        </li>
    </ul>
</div>
<!--close-top-Header-menu-->
