
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
	            <br>

                <div class="panel">
                                            
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="m-b-30">
                                    <a href="{{ Url('dashboard/video/create') }}" id="addToTable" class="btn btn-primary waves-effect waves-light">Add video <i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        @if($videos->count() > 0)
                                <table class="table table-bordered table-striped" id="datatable-editable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Create By</th>
                                            <th>Create At</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                            		@foreach($videos as $video)
                                        <tr class="gradeX">
                                            <td>1</td>
                                            <td>{{$video->title}}</td>
                                            <td>{{$video->description}}</td>
                                            <td>{{$video->user['email']}}</td>
                                            <td>{{$video->created_at->diffForHumans()}}</td>
                                            <td class="actions">
                                                <a href="{{ Url('dashboard/video/' . $video->id) }}" class="on-default edit-row"><i class="fa fa-eye"></i></a>
                                                <a href="" class="on-default edit-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                        @else
                            <div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                Opps we currently don't have any Videos info to show at the moment. <a href="{{ Url('dashboard/video/create') }}" class="alert-link">Why don't you add some?</a>
                            </div>
                        @endif
                    </div>
                    <!-- end: page -->

                </div>





	        </div> <!-- container -->
	                   
	    </div> <!-- content -->

	    <footer class="footer text-right">
	        2015 © Moltran.
	    </footer>

	</div>
@endsection