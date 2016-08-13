
@extends('dashboard.master')

@section('content')
    @include('dashboard.pages.includes.sections.side_bar')
    <div class="content-page">
        <div class="content">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="pull-left page-title">Manage Videos</h4>
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Manage Videos</li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                
                    <div class="col-lg-12 col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                @if($videos->count() > 0)
                                    <table class="table table-hover table-responsive" id="sortable-table">
                                        <thead>
                                        <tr>
                                            <th>Thumbnail</th>
                                            <th>Title</th>
                                            <th>Contributor Name</th>
                                            <th>Clip Length</th>
                                            <th>Price (₦)</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($videos as $video)
                                                <tr>
                                                    <td><img src="{{ $video->category['image'] }}" width="100" class="img-responsive"></td>
                                                    <td>{{ $video->title }}</td>
                                                    <td>{{$video->user->first_name}} {{$video->user->last_name}}</td>
                                                    <td>01:12</td>
                                                    <td>{{ $video->price }}</td>
                                                    <td><a href="{{ Url('dashboard/video/' . $video->id) }}" class="btn btn-success allvideos_btn">View</a></td>
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
                        </div>
                    </div>
                
                </div><!-- End row -->



            </div> <!-- container -->
        </div>
    </div>
@endsection