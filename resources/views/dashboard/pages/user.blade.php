
@extends('dashboard.master')

@section('content')
	
	@include('dashboard.pages.includes.sections.side_bar')

	<div class="content-page">
	    <!-- Start content -->
	    <div class="content">
	        <div class="container">

	            <!-- Page-Title -->
	            <div class="row">
	                <div class="col-sm-12">
	                    <h4 class="pull-left page-title">Users</h4>
	                </div>
	            </div>

	            <div class="row">
	            
	                <!-- Left sidebar -->
	                <div class="col-lg-3 col-md-4">
	                    <a href="{{ Url('dashboard/user/create') }}" class="btn btn-danger waves-effect waves-light btn-block">Add User</a>
	                    <div class="panel panel-default p-0 m-t-20">
	                        <div class="panel-body p-0">
	                            <div class="list-group mail-list">
	                              <a href="{{ Url('dashboard/users') }}" class="list-group-item no-border "><i class="fa fa-download m-r-5"></i> Users <b>({{$all_users->count()}})</b></a>
	                              <a href="{{ Url('dashboard/users/?admins=true') }}" class="list-group-item no-border"><i class="fa fa-download m-r-5"></i>Admins <b>({{$admins->count()}})</b></a>
	                              <a href="{{ Url('dashboard/users/?regular_users=true') }}" class="list-group-item no-border"><i class="fa fa-download m-r-5"></i>Regular Users <b>({{$regular_users->count()}})</b></a>	
	                            </div>
	                        </div>
	                    </div>

	                </div>
	                <!-- End Left sidebar -->
	            
	                <!-- Right Sidebar -->
	                <div class="col-lg-9 col-md-8">

	                    <div class="panel panel-default m-t-20">
	                        <div class="panel-body">
	                            <div class="table-responsive">
	                                <table class="table table-hover mails">
	                                    <tbody>
	                                    	@if($users->count() > 0)
		                                    	@foreach($users as $user)
		                                        <tr>
		                                            <td class="mail-select">
		                                                <div class="checkbox checkbox-primary">
		                                                    <input id="checkbox1" type="checkbox" checked="checked">
		                                                    <label for="checkbox1"></label>
		                                                </div>
		                                            </td>
		                                            <td>
		                                                <a href="{{ Url('dashboard/user/' . $user->id) }}">{{ $user->first()->name ? $user->first()->name : "Name Unknown" }}</a>
		                                            </td>
		                                            <td>
		                                                <a href="{{ Url('dashboard/user/' . $user->id) }}">
		                                                	@if($user->role == 1)
		                                                		Admin
		                                                	@elseif($user->role == 2)
		                                                		Property Owner
		                                                	@elseif($user->role == 3)
		                                                		Tenant
		                                                	@endif
		                                                </a>
		                                            </td>
		                                            <td class="text-right">
		                                                <div class="btn-group col-md-5">
															<button type="button" class="btn btn-primary waves-effect waves-light dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
															
															<span class="ion-gear-b"></span>
															</button>
															<ul class="dropdown-menu">
																<li><a href="{{ Url('dashboard/user/' . $user->id) }}">View Profile</a></li>
																<li><a href="#fakelink">Delete</a></li>
																<li><a href="#fakelink" data-toggle="modal" data-target="#con-close-modal{{$user->id}}">Send Message</a></li>
															</ul>
														</div>
													</td>
		                                            <td class="text-right">
		                                                {{$user->first()->created_at->diffForHumans()}}
		                                            </td>
		                                        </tr>
	                                        	@endforeach

		                                        @foreach($users as $user)
		                                        	<div id="con-close-modal{{$user->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
		                                        	   <form action="{{ Url('user/sendmessage') }}" method="post">
			                                        	    <div class="modal-dialog"> 
			                                        	        <div class="modal-content"> 
			                                        	            <div class="modal-header"> 
			                                        	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
			                                        	                <h4 class="modal-title">Modal Content is Responsive</h4> 
			                                        	            </div> 
			                                        	            <div class="modal-body"> 
			                                        	                <div class="row"> 
			                                        	                    <div class="col-md-6"> 
			                                        	                        <div class="form-group"> 
			                                        	                            <label for="field-1" class="control-label">From</label> 
			                                        	                            <input type="text" class="form-control" id="field-1" placeholder="" name="sender" value="{{ Auth::user()->email }}"> 
			                                        	                        </div> 
			                                        	                    </div> 
			                                        	                    <div class="col-md-6"> 
			                                        	                        <div class="form-group"> 
			                                        	                            <label for="field-2" class="control-label">To</label> 
			                                        	                            <input type="text" class="form-control" id="field-2" placeholder="" name="receiver" value="{{$user->email}}"> 
			                                        	                        </div> 
			                                        	                    </div> 
			                                        	                </div> 
			                                        	                <div class="row"> 
			                                        	                    <div class="col-md-12"> 
			                                        	                        <div class="form-group"> 
			                                        	                            <label for="field-3" class="control-label">Subject</label> 
			                                        	                            <input type="text" class="form-control" id="field-3" name="subject" placeholder="Subject"> 
			                                        	                        </div> 
			                                        	                    </div> 
			                                        	                </div> 
			                                        	                <div class="row"> 
			                                        	                    <div class="col-md-12"> 
			                                        	                        <div class="form-group no-margin"> 
			                                        	                            <label for="field-7" class="control-label">Message</label> 
			                                        	                            <textarea name="message" class="form-control autogrow" id="field-7" placeholder="Write your message here" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 104px"></textarea> 
			                                        	                        </div> 
			                                        	                    </div> 
			                                        	                </div> 
			                                        	            </div> 
			                                        	            <div class="modal-footer"> 
			                                        	            <br>
			                                        	                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button> 
			                                        	                <button type="submit" class="btn btn-info waves-effect waves-light">Save changes</button> 
			                                        	            </div> 
			                                        	        </div> 
			                                        	    </div>
		                                        		</form>
		                                        	</div>
		                                        @endforeach
		                                    @else
		                                    	<div class="alert alert-info alert-dismissable">
		                                    	    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		                                    	    Opps we currently don't have any User under this category to show at the moment. <a href="{{ Url('dashboard/user/create') }}" class="alert-link">Why don't you add some?</a>
		                                    	</div>
		                                    @endif

	                                    </tbody>
	                                </table>
	                            </div>
	                            
	                            <hr>
	                            
	             <!--                <div class="row">
	                                <div class="col-xs-5">
	                                    <div class="btn-group pull-right">
	                                      <button type="button" class="btn btn-default waves-effect"><i class="fa fa-chevron-left"></i></button>
	                                      <button type="button" class="btn btn-default waves-effect"><i class="fa fa-chevron-right"></i></button>
	                                    </div>
	                                </div>
	                            </div> -->
	                        
	                        </div> <!-- panel body -->
	                    </div> <!-- panel -->
	                </div> <!-- end Col-9 -->
	            
	            </div><!-- End row -->



	        </div> <!-- container -->
	                   
	    </div> <!-- content -->

	    <footer class="footer text-right">
	        2015 © Moltran.
	    </footer>

	</div>
@endsection