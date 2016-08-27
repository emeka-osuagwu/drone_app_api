
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
        <div class="content">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="pull-left page-title">Purchases</h4>
                        <ol class="breadcrumb pull-right">
                            <li><a href="{{ Url('dashboard') }}">Dashboard</a></li>
                            <li class="active">Purchases</li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                
                    <div class="col-lg-12 col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <table class="table table-responsive" id="sortable-table">

                                    <thead>
                                    <tr>
                                        <th>Status</th>
                                        <th>File Name</th>
                                        <th>Payment Type</th>
                                        <th>Log Date</th>
                                        <th>Transaction Date</th>
                                        <th>Price (₦)</th>
                                        <th>User</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($purchases as $purchase)
                                        <tr>
                                            <td><a class="orderhistory_downloadbtn btn btn-success">{{ $purchase->payment_status }}</a></td>
                                            <td><a href="{{ Url('dashboard/video/' . $purchase->post->video_id ) }}">{{ $purchase->post->title }}</a></td>
                                            <td>{{ $purchase->payment_type }}</td>
                                            <td>{{$purchase->created_at->diffForHumans()}}</td>
                                            <td>{{ $purchase->transaction_date}}</td>
                                            <td>{{$purchase->amount_paid}}</td>
                                            <td><a href="{{ url('user/' . $purchase->user->id) }}"> {{$purchase->user->first_name . " " . $purchase->user->last_name}}</a></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                @if($purchases->count() < 1)
                                    <div class="alert alert-info alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        Opps we currently don't have any Purchases info to show at the moment.
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