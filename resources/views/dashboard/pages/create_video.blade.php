
@extends('dashboard.master')

@section('content')

	@include('dashboard.pages.includes.sections.side_bar')
    <div class="content-page">
        <div class="content">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="pull-left page-title">Upload Video</h4>
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Upload Video</li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                
                    <div class="col-lg-12 col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                
                                <div class="editvideo">
                                    <form class="editvideo_form" action="{{ Url('dashboard/video/create') }}" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Choose File</label>
                                            <input type="file" name="file" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" class="form-control" name="title" placeholder="Title" required>
                                        </div>   

                                        <div class="form-group">
                                            <label>Category</label>
                                            <select multiple="multiple" name="category" class="form-control">
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div> 

                                        <div class="form-group">
                                            <label>Tags <br> (separate tags with comma e.g bird, sky)</label>
                                            <input type="text" placeholder="bird, sky" class="form-control" name="tags" required>
                                        </div> 
                                        
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class=" form-control" rows="4" placeholder="Description" name="description"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label>Pricing</label>
                                            <select name="price" class="form-control">
                                                <option value="30000">N30,000</option>
                                            </select>
                                        </div> 
                                        
                                        <div class="form-group">
                                            <button class="btn btn-success">Upload Video</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                
                </div><!-- End row -->



            </div> <!-- container -->                       
        </div>
    </div>
@endsection