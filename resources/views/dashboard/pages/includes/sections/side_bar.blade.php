<div class="left side-menu">
	  <div class="sidebar-inner slimscrollleft">
		  <div class="user-details">
			  <div class="pull-left">
				  <img src="{{ (Auth::user()->image)? Auth::user()->image : asset('assets/images/users/avatar-1.jpg') }}" alt="" class="thumb-md img-circle">
			  </div>

			  <div class="user-info">
				  <div class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">{{Auth::user()->first_name}} {{Auth::user()->last_name}}<span class="caret"></span></a>
					  <ul class="dropdown-menu">
						  <li><a href="{{ Url('dashboard/user') }}"><i class="md md-face-unlock"></i> Profile<div class="ripple-wrapper"></div></a></li>
						 <!--  <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>
						  <li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li> -->
						  <li><a href="{{ Url('logout') }}"><i class="md md-settings-power"></i> Logout</a></li>
					  </ul>
				  </div>
				  
				  <p class="text-muted m-0">
				  	@if(Auth::user()->role == 1)
				  		Admin
				  	@elseif(Auth::user()->role == 2)
				  		Property Owner
				  	@elseif(Auth::user()->role == 3)
				  		Tenant
				  	@endif
				  </p>
			  </div>
		  </div>

		  	@if( Auth::user()->role == 0)
				<div id="sidebar-menu">
					<ul>
						<li><a href="{{ Url('/dashboard') }}" class="waves-effect waves-light active"><i class="md md-home"></i><span> Dashboard </span></a></li>
						<li><a href="{{ Url('/dashboard/user/videos') }}" class="waves-effect waves-light active"><i class="md md-home"></i><span> Videos </span></a></li>
						<li><a href="{{ Url('/dashboard/user') }}" class="waves-effect waves-light active"><i class="md md-home"></i><span> Downloads </span></a></li>
						<li><a href="{{ Url('/dashboard/user') }}" class="waves-effect waves-light active"><i class="md md-home"></i><span> Profile </span></a></li>
					</ul>
					<div class="clearfix"></div>
				</div>
			@endif

			@if( Auth::user()->role == 1)
			<div id="sidebar-menu">
			  	<ul>
					<li>
						<a href="{{ Url('/dashboard') }}" class="waves-effect waves-light active"><i class="md md-home"></i><span> Dashboard </span></a>
				  	</li>

				  	<li class="has_sub">
						<a href="#" class="waves-effect waves-light">
							<i class="md md-mail"></i>
							<span>User</span>
							<span class="pull-right">
						  		<i class="md md-add"></i>
						  	</span>
						</a>
						<ul class="list-unstyled">
							<li><a href="{{ Url('dashboard/users') }}">Users</a></li>
							<li><a href="{{ Url('dashboard/user/create') }}">Add User</a></li>
						</ul>
				  	</li>

				  	<li class="has_sub">
						<a href="#" class="waves-effect waves-light">
							<i class="md md-mail"></i>
							<span>Videos</span>
							<span class="pull-right">
						  		<i class="md md-add"></i>
						  	</span>
						</a>
						<ul class="list-unstyled">
							<li><a href="{{ Url('dashboard/videos') }}">Videos</a></li>
							<li><a href="{{ Url('dashboard/video/create') }}">Add Videos</a></li>
							<li><a href="{{ Url('dashboard/video/request') }}">Requests</a></li>
						</ul>
				  	</li>

				  	<li class="has_sub">
						<a href="#" class="waves-effect waves-light">
							<i class="md md-mail"></i>
							<span>Categories</span>
							<span class="pull-right">
						  		<i class="md md-add"></i>
						  	</span>
						</a>
						<ul class="list-unstyled">
							<li><a href="{{ Url('dashboard/categories') }}">Categories</a></li>
						</ul>
				  	</li>

			  		<li>
			  			<a href="{{ Url('dashboard/payments') }}" class="waves-effect waves-light"><i class="md md-home"></i><span> Payments </span></a>
			  	  	</li>

			  </ul>
			  <div class="clearfix"></div>
			</div>
			@endif
		  
		  <div class="clearfix"></div>
	  </div>
  </div>
  <!-- Left Sidebar End --> 


