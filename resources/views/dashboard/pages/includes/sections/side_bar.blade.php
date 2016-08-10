<div class="left side-menu">
	  <div class="sidebar-inner slimscrollleft">
		  <div class="user-details">
			  <div class="pull-left">
				  <img src="{{ asset('assets/images/users/avatar-1.jpg') }}" alt="" class="thumb-md img-circle">
			  </div>
			  <div class="user-info">
				  <div class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">{{Auth::user()->first_name}}<span class="caret"></span></a>
					  <ul class="dropdown-menu">
						  <li><a href="{{ Url('user') }}"><i class="md md-face-unlock"></i> Profile<div class="ripple-wrapper"></div></a></li>
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
		  <!--- Divider -->
		  <div id="sidebar-menu">
			  	<ul>
					<li>
						<a href="{{ Url('/') }}" class="waves-effect waves-light active"><i class="md md-home"></i><span> Dashboard </span></a>
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
							<li><a href="{{ Url('users') }}">Users</a></li>
							<li><a href="{{ Url('user/create') }}">Add User</a></li>
						</ul>
				  	</li>

				  	<li class="has_sub">
						<a href="#" class="waves-effect waves-light">
							<i class="md md-mail"></i>
							<span>Property</span>
							<span class="pull-right">
						  		<i class="md md-add"></i>
						  	</span>
						</a>
						<ul class="list-unstyled">
							<li><a href="{{ Url('properties') }}">Properties</a></li>
							<li><a href="{{ Url('property/create') }}">Add Properties</a></li>
						</ul>
				  	</li>

				  	<li class="has_sub">
						<a href="#" class="waves-effect waves-light">
							<i class="md md-mail"></i>
							<span>Add Rent</span>
							<span class="pull-right">
						  		<i class="md md-add"></i>
						  	</span>
						</a>
						<ul class="list-unstyled">
							<li><a href="{{ Url('rents') }}">Rents</a></li>
							<li><a href="{{ Url('rent/create') }}">Add Rent</a></li>
						</ul>
				  	</li>

			  </ul>
			  <div class="clearfix"></div>
		  </div>
		  <div class="clearfix"></div>
	  </div>
  </div>
  <!-- Left Sidebar End --> 


