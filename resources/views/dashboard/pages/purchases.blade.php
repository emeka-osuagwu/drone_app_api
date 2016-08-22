
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
                                        <th>Date</th>
                                        <th>Price (₦)</th>
                                        <th>User</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($purchases as $purchase)
                                        <tr>
                                            <td><a class="orderhistory_downloadbtn btn btn-success">Paid</a></td>
                                            <td>Aerial Footage of Fuel Queue</td>
                                            <td>March 26, 2016</td>
                                            <td>5000</td>
                                            <td>Yomi Eluwande</td>
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