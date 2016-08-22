<header>
    <nav class="navbar navbar-default othernavbar">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a class="navbar-brand" href="/">
               <img src="{{ asset('img/anaklevm.png') }}" class="logo" alt="Anakle Logo">
          </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
         
          
          <ul class="nav navbar-nav navbar-right">
            <li><a href="requestvideo"></a></li>
            <li><a href="{{ Url('videos') }}">Videos</a></li>
            <li><a href="{{ url('video/request') }}">Request a video</a></li>
            @if(Auth::check())
              @if( (int) Auth::user()->role == 1 )
              <li><a href="{{ Url('dashboard') }}">DashBoard</a></li>
              @endif
              <li><a href="{{ Url('logout') }}">Logout</a></li>
            @else
              <li><a href="{{ Url('login') }}">Login</a></li>
              <li><a href="{{ Url('register') }}">Sign Up</a></li>
            @endif
          </ul>

        </div>
      </div>
    </nav>
</header>