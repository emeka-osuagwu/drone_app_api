
@extends('dashboard.master')

@section('content')
	@include('dashboard.pages.includes.sections.side_bar')
	<div class="content-page">
        <div class="content">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="pull-left page-title">Video Requests</h4>
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Video Requests</li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                
                    <div class="col-lg-12 col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                
                                <table class="table table-hover table-responsive" id="sortable-table">
                                    <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Location</th>
                                        <th>Budget (₦)</th>
                                        <th>Date</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($video_requests as $video_request)
	                                    <tr>
	                                        <td>{{ $video_request->title }}</td>
	                                        <td>{{ $video_request->category->name }}</td>
	                                        <td>Lagos</td>
	                                        <td>{{ $video_request->budget }}</td>
	                                        <td>{{ $video_request->date }}</td>
	                                        <td><a href="viewrequest.php" class="btn btn-success allvideos_btn">View</a></td>
	                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                
                </div><!-- End row -->



            </div> <!-- container -->      
        </div>
    </div>
@endsection