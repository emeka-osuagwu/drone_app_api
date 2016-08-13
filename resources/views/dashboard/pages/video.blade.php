
@extends('dashboard.master')

@section('content')
	@include('dashboard.pages.includes.sections.side_bar')

	<div class="content-page">
        <div class="content">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="pull-left page-title">Edit Video</h4>
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="managevideos.php">Manage Videos</a></li>
                            <li class="active">Edit Video</li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                
                    <div class="col-lg-12 col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">


                            	<div class="m-t-20 m-b-20">
				                    <video width="100%" controls="">
				                        <source src="{{ $post->video->original_url }}" type="video/mp4">
				                    </video>
				                </div>

				                <div class="editvideo">
				                    <form class="editvideo_form" action="{{ Url('dashboard/video/update') }}" method="post">
                            			<input value="{{ $post->id }}" name="post_id" hidden>
				                        
				                        <div class="form-group">
				                            <label>Title</label>
				                            <input class="form-control" value="{{ $post->title }}" placeholder="Title" name="title" required="">
				                        </div>
				                        <div class="form-group">
				                            <div class="row">
				                                <div class="col-sm-6 col-xs-12">
				                                    <label>Price (N)</label>
				                                    <select class="form-control" name="price" required="">
				                                        <option value="N30,000" >N30,000</option>
				                                        <option>N25,000</option>
				                                        <option>N20,000</option>
				                                        <option>N15,000</option>
				                                        <option>N10,000</option>
				                                        <option>N7,500</option>
				                                        <option>N5,000</option>
				                                    </select>
				                                </div>
				                                <div class="col-sm-6 col-xs-12">
				                                    <label>Tags</label>
				                                    <input class="form-control" value="{{ $post->tags }}" placeholder="Tags" name="tags" required="">
				                                </div>
				                            </div>
				                        </div>
				                       
				                        <div class="form-group">
				                        	<label>Category</label>
				                            <select class="form-control" name="category_id" required="">
				                                <option value="{{$post->category->id}}">{{$post->category->name}}</option>
				                              	@foreach($categories as $category)
				                                	<option value="{{$category->id}}">{{$category->name}}</option>
				                                @endforeach
				                            </select>
				                        </div>
				                        <div class="form-group">
				                            <label>Description</label>
				                            <textarea class=" upload_desc form-control" rows="4" placeholder="Description" name="description">{{ $post->description }}</textarea>
				                        </div>
				                        
				                        <div class="form-group">
				                            <button class="btn btn-success update">Update</button>
				                        </div>
				                    </form>
				                </div>

				                <div class="videostats">
				                    <div class="videostats_header">
				                        <h4>Video stats</h4>
				                    </div>

				                    <div class="videostats_details">
				                        <p>Video has been downloaded <strong>100</strong> times</p>
				                        <p>Video has been viewed <strong>2000</strong> times</p>
				                    </div>
				                </div>

				                <div class="editvideo_delete">
				                    <button class="btn btn-danger pull-right deletevideobtn">Delete this video</button>
				                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection