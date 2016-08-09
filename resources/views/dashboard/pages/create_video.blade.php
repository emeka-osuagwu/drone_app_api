
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
	                    <h4 class="pull-left page-title"></h4>
	                </div>
	            </div>
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
	            <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3 class="panel-title"></h3>Create Rent</div>
                            <div class="panel-body">
                                <form class="form-horizontal" role="form" action="{{ url('dashboard/video/create') }}" method="post" enctype="multipart/form-data">                                    
   

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Video</label>
                                        <div class="col-md-10">
                                            <input type="file" name="file" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Rent Paid</label>
                                        <div class="col-md-10">
                                            <input type="text" name="title" class="form-control" required placeholder="Video Titl">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Description</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control" rows="5" name="description" required placeholder="Description" ></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                     <div class="pull-right" style="margin-right:20px;">
                                     <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
                                     </div>
                                    </div>
                                   
                                </form>
                            </div> <!-- panel-body -->
                        </div> <!-- panel -->
                    </div> <!-- col -->
                </div>



	        </div> <!-- container -->
	                   
	    </div> <!-- content -->

	    <footer class="footer text-right">
	        2015 © Moltran.
	    </footer>

	</div>
@endsection