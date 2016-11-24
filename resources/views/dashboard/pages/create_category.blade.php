
@extends('dashboard.master')

@section('content')
	
	@include('dashboard.pages.includes.sections.side_bar')

	@if (Session::has('message'))
	<script>
		swal("Category created")
	</script>
	@endif

	@if (Session::has('category_deleted'))
	<script>
		swal("Category deleted")
	</script>
	@endif

	<div class="content-page">
        <div class="content">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="pull-left page-title">Manage Categories</h4>
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Manage Categories</li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                
                    <div class="col-lg-12 col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="addcategory">
                                                <form class="addcategory_form" action="{{ Url('dashboard/category/create') }}" enctype="multipart/form-data" method="post">
                                                    
                                                	@if (count($errors) > 0)
                                                	    @foreach ($errors->all() as $error)
                                                	        <div class="static-notification bg-red-dark tap-dismiss">
                                                	            <div class="alert alert-danger alert-dismissible" role="alert">
                                                	                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                	                {{$error}}
                                                	            </div>
                                                	        </div>
                                                	    @endforeach
                                                	@endif

                                                    <div class="form-group">
                                                        <label>Choose Thumbnail</label>
                                                        <input type="file" name="image">
                                                    </div>

                                                    <div class="form-group">
                                                        <input class="form-control" type="text" placeholder="Category Name" name="name" required="" value="{{ old('title') }}">
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <input class="form-control" type="text" name="description" placeholder="Category Description" value="{{ old('description') }}" required="">
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <button class="btn btn-success complete">Create</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="listedcategories">

                                            	@if($categories->count() > 0)
	                                                <table id="sortable-table" class="table table-hover table-responsive">
	                                                    <thead>
	                                                    <tr>
	                                                        <th>Category</th>
	                                                        <th></th>
	                                                        <th></th>
	                                                    </tr>
	                                                    </thead>
	                                                    <tbody>
	                                                    @foreach($categories as $category)
		                                                    <tr>
		                                                        <td><p>{{ $category->name }}</p></td>
		                                                        <td><p>{{ $category->description }}</p></td>
		                                                        <td><a href="editsinglecategory.php" class="btn btn-success mceditbtn">Edit</a></td>
		                                                        <td><a href="{{ Url('dashboard/category/' . $category->id . '/delete') }}" class="btn btn-danger mcdeletebtn">Delete</a></td>
		                                                    </tr>
		                                                @endforeach
	                                                    </tbody>
	                                                </table>
	                                            @else
		                                            <div class="alert alert-info alert-dismissable">
		                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		                                                Opps we currently don't have any Categories info to show at the moment. <a href="{{ Url('dashboard/categories') }}" class="alert-link">Why don't you add some?</a>
		                                            </div>
	                                            @endif

                                            </div>
                                        </div>
                                    </div>

                            </div>
                        </div>
                    </div>
                
                </div><!-- End row -->



            </div> <!-- container -->
        </div>
    </div>

@endsection