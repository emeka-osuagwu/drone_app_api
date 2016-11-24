
@extends('dashboard.master')

@section('content')
	
	@include('dashboard.pages.includes.sections.side_bar')

	@if(Auth::user()->profile_status == 0)
		<script>
			swal("Opps you need to update your profile under settings!")
		</script>
	@endif

	@if (Session::has('message'))
	<script>
		swal("Profile updated!")
	</script>
	@endif

	<div class="content-page">
	    <!-- Start content -->
	    <div class="content">
	        
		    <div class="wraper container-fluid">
		        <div class="row">
		            <div class="col-sm-12">
		                <div class="bg-picture text-center" style="background-image:url({{ asset('assets/images/big/bg.jpg')  }})">
		                    <div class="bg-picture-overlay"></div>
		                    <div class="profile-info-name">
		                        <img src="{{ ($user->first()->image)? $user->first()->image : asset('assets/images/users/avatar-1.jpg') }}" class="thumb-lg img-circle img-thumbnail" alt="profile-image">
		                        <h3 class="text-white">{{$user->first()->first_name}} {{$user->first()->last_name}} </h3>
		                    </div>
		                </div>
		                <!--/ meta -->
		            </div>
		        </div>

		        <div class="row user-tabs">
		            <div class="col-lg-6 col-md-9 col-sm-9">
		                <ul class="nav nav-tabs tabs">
		                <li class="active tab">
		                    <a href="#home-2" data-toggle="tab" aria-expanded="false" class=""> 
		                        <span class="visible-xs"><i class="fa fa-home"></i></span> 
		                        <span class="hidden-xs">About Me</span> 
		                    </a> 
		                </li> 

		                @if(Auth::user()->role == 0)
		                <li class="tab"> 
		                    <a href="#profile-2" data-toggle="tab" aria-expanded="false"> 
		                        <span class="visible-xs"><i class="fa fa-user"></i></span> 
		                        <span class="hidden-xs">DOWNLOADS HISTORY</span> 
		                    </a> 
		                </li>
		                @endif
		                
		                @if(Auth::user()->id == $user->first()->id)
		                <li class="tab"> 
		                    <a href="#settings-2" data-toggle="tab" aria-expanded="false" class=""> 
		                        <span class="visible-xs"><i class="fa fa-cog"></i></span> 
		                        <span class="hidden-xs">Settings</span> 
		                    </a> 
		                </li> 
		                @endif
		            <div class="indicator"></div></ul> 
		            </div>
		        </div>
		        
		        <div class="row">
		            <div class="col-lg-12"> 
		            
		            <div class="tab-content profile-tab-content"> 
		               
		                <div class="tab-pane active" id="home-2"> 
		                    <div class="row">
		                        <div class="col-md-4">
		                            <!-- Personal-Information -->
		                            <div class="panel panel-default panel-fill">
		                                <div class="panel-heading"> 
		                                    <h3 class="panel-title">Personal Information</h3> 
		                                </div> 
		                                <div class="panel-body"> 
		                                    <div class="about-info-p">
		                                        <strong>Full Name</strong>
		                                        <br>
		                                        <p class="text-muted">{{$user->first()->first_name}} {{$user->first()->last_name}}</p>
		                                    </div>
		                                    <div class="about-info-p">
		                                        <strong>Mobile</strong>
		                                        <br>
		                                        <p class="text-muted">{{$user->first()->phone}}</p>
		                                    </div>
		                                    <div class="about-info-p">
		                                        <strong>Email</strong>
		                                        <br>
		                                        <p class="text-muted">{{$user->first()->email}}</p>
		                                    </div>
		                                    <div class="about-info-p m-b-0">
		                                        <strong>Location</strong>
		                                        <br>
		                                        <p class="text-muted">{{$user->first()->city}}</p>
		                                    </div>
		                                </div> 
		                            </div>
		                        </div>


		                        <div class="col-md-8">
		                            <!-- Personal-Information -->
		                            <div class="panel panel-default panel-fill">
		                                <div class="panel-heading"> 
		                                    <h3 class="panel-title">Biography</h3> 
		                                </div> 
		                                <div class="panel-body"> 
		                                    <p>{{$user->first()->description}}</p>
		                                </div> 
		                            </div>
		                        </div>

		                    </div>
		                </div> 

		                <div class="tab-pane" id="profile-2">
		           			<div class="panel panel-default panel-fill">
                                <div class="panel-heading"> 
                                    <h3 class="panel-title">Edit Profile</h3> 
                                </div>

                                <div class="panel-body"> 
                                    <table class="table table-responsive" id="sortable-table">

	                                    @if($user->first()->downloads->count() < 1)
	                                    	<div class="alert alert-info alert-dismissable">
	                                    	    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	                                    	    Opps we currently haven't download any Videos <a href="{{ Url('videos') }}" class="alert-link">Click here to view some videos</a>
	                                    	</div>
	                                    @else
	                                        <thead>
	                                        <tr>
	                                            <th>Status</th>
	                                            <th>File Name</th>
	                                            <th>Date</th>
	                                            <th>Price (₦)</th>
	                                        </tr>
	                                        </thead>
	                                        <tbody>

		                                        @foreach($user->first()->downloads as $downloads)
			                                        <tr>
			                                            <td><a href="" class="orderhistory_downloadbtn btn btn-success">Download</a></td>
			                                            <td>Aerial Footage of Fuel Queue</td>
			                                            <td>March 26, 2016</td>
			                                            <td>5000</td>
			                                        </tr>
		                                        @endforeach

	                                        </tbody>
	                                    @endif
                                    </table>
                                </div>
                            </div>
		                </div> 

		                @if(Auth::user()->id == $user->first()->id)
		                <div class="tab-pane" id="settings-2">
		                    <form action="{{ Url('dashboard/user/update') }}" method="post" enctype="multipart/form-data">
			                    <div class="panel panel-default panel-fill">
			                        <div class="panel-heading"> 
			                            <h3 class="panel-title">Edit Profile</h3> 
			                        </div> 
			                        <div class="panel-body"> 
			                            <form role="form">
			                                <div class="form-group">
			                                    <label for="FullName">First Name</label>
			                                    <input type="text" value="{{$user->first()->first_name}}" id="FullName" name="first_name" class="form-control" required>
			                                </div>
			                                <div class="form-group">
			                                    <label for="FullName">Last Name</label>
			                                    <input type="text" value="{{$user->first()->last_name}}" name="last_name" id="FullName" class="form-control" required>
			                                </div>
			                                <div class="form-group">
			                                    <label for="Email">Email</label>
			                                    <input type="email" name="email" value="{{$user->first()->email}}" id="Email" class="form-control" required>
			                                </div>
			                                <div class="form-group">
			                                    <label for="Username">Image</label>
			                                    <input type="file" id="Username" name="image" class="form-control">
			                                </div>
											<div class="form-group">
			                                    <label for="Password">Mobile Number</label>
			                                    <input type="tel" placeholder="090 *** *** **" class="form-control" name="phone" value="{{ $user->first()->phone }}" required>
			                                </div>
											<div class="form-group">
			                                    <label for="Password">Location</label>
			                                    <input type="text" placeholder="Your Location" class="form-control" name="city" value="{{ $user->first()->city }}" required>
			                                </div>
											<!-- 		                                
			                                <div class="form-group">
			                                    <label for="RePassword">Re-Password</label>
			                                    <input type="password" placeholder="6 - 15 Characters" id="RePassword" class="form-control">
			                                </div> -->
			                                <div class="form-group">
			                                    <label for="AboutMe">About Me</label>
			                                    <textarea style="height: 125px" id="AboutMe" name="description" class="form-control" required>{{ $user->first()->description }}</textarea>
			                                </div>
			                                <button class="btn btn-primary waves-effect waves-light w-md" type="submit">Save</button>
			                            </form>

			                        </div> 
			                    </div>
		        			</form>
		                </div>
		                @endif

		            </div> 
		        </div>
		        </div>
		    </div>
	                   
	    </div>

	    <footer class="footer text-right">
	        2015 © Moltran.
	    </footer>

	</div>
@endsection