<header id="main-header">
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#lauraMenu">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ route('mainPage') }}">Restoranas</a>
    </div>
    <div class="collapse navbar-collapse" id="lauraMenu">
      <ul class="nav navbar-nav navbar-right navbar-border">
        <li><a href="{{route('dishes.index')}}">Dish Menu</a></li>
        <li><a href="#portfolio">Table Reservation</a></li>
        <li><a href="#contact">Contacts</a></li>
        @if (Route::has('login'))
          @if (Auth::check())
        <li><a href="">Cart</a></li>
            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ route('user.all') }}">Admin panel</a></li>
                                    <li><a href="{{ route('user.show', '4') }}">My profile</a></li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                    @else
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @endif
        @endif
      </ul>

    </div>
  </div>
</nav>
</header>
