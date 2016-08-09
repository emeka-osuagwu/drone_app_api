
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
	                                <h4 class="pull-left page-title">View Video</h4>
	                                <ol class="breadcrumb pull-right">
	                                    <li><a href="#">Dashboard</a></li>
	                                    <li><a href="#">Manage Videos</a></li>
	                                    <li class="active">View Video</li>
	                                </ol>
	                            </div>
	                        </div>
	                        <div class="row">
	                        
	                            <div class="col-lg-12 col-md-12">
	                                <div class="panel panel-default">
	                                    <div class="panel-body">
	                                        
	                                        <div class="m-t-20 m-b-20">
	                                            <video width="70%" controls="">
	                                                <source src="/video/preview.mp4" type="video/mp4">
	                                                <source src="{{ $video->video->original_url }}" type="video/webm">
	                                                <source src="/video/preview.ogg" type="video/ogg">
	                                            </video>
	                                        </div>
	                                        <div class="editvideo">
	                                            <form class="editvideo_form" action="{{ Url('dashboard/video/update') }}" method="post">
	                                                
	                                                <input class="form-control" hidden="true" style="display:none" name="post_id" value="{{ $video->id }}">

	                                                <div class="form-group">
	                                                    <label>Title</label>
	                                                    <input class="form-control" value="{{ $video->title }}" name="title" placeholder="Title" required="">
	                                                </div>    
	                                                
	                                                <div class="form-group">
	                                                    <label>Description</label>
	                                                    <textarea class=" form-control" rows="4" name="description" placeholder="Description">{{ $video->description }}</textarea>
	                                                </div>
	                                                
	                                                <div class="form-group">
	                                                    <button class="btn btn-success">Update</button>
	                                                </div>
	                                            </form>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        
	                        </div><!-- End row -->
	                    </div> <!-- container -->
	                               
	                </div> <!-- content -->
	            </div>
@endsection