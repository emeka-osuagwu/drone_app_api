
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
                            <li><a href="#">Dashboard</a></li>
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
                                    <tr>
                                        <td><a class="orderhistory_downloadbtn btn btn-success">Paid</a></td>
                                        <td>Aerial Footage of Fuel Queue</td>
                                        <td>March 26, 2016</td>
                                        <td>5000</td>
                                        <td>Yomi Eluwande</td>
                                    </tr>
                                    <tr>
                                        <td><a class="orderhistory_downloadbtn btn btn-success">Paid</a></td>
                                        <td>Busy Market in Lagos</td>
                                        <td>January 1, 2016</td>
                                        <td>4000</td>
                                        <td>Editi Effiong</td>
                                    </tr>
                                    <tr>
                                        <td><a class=" orderhistory_downloadbtn btn btn-success">Paid</a></td>
                                        <td>Nighttime in Abuja</td>
                                        <td>December 2, 2015</td>
                                        <td>5000</td>
                                        <td>Emeka Osuagwu</td>
                                    </tr>
                                    <tr>
                                        <td><a class=" orderhistory_downloadbtn btn btn-success">Paid</a></td>
                                        <td>Footage of a Nigerian Child playing Football </td>
                                        <td>December 5, 2015</td>
                                        <td>2000</td>
                                        <td>Editi Effiong</td>
                                    </tr>
                                    <tr>
                                        <td><a class=" orderhistory_downloadbtn btn btn-success">Paid</a></td>
                                        <td>Busy professionals at lunch break</td>
                                        <td>April 2, 2016</td>
                                        <td>8000</td>
                                        <td>Emeka Osuagwu</td>
                                    </tr>
                                    <tr>
                                        <td><a class=" orderhistory_downloadbtn btn btn-success">Paid</a></td>
                                        <td>Aerial footage of the Third Mainland Bridge</td>
                                        <td>May 12, 2016</td>
                                        <td>10000</td>
                                        <td>Emeka Osuagwu</td>
                                    </tr>
                                    <tr>
                                        <td><a class=" orderhistory_downloadbtn btn btn-success">Paid</a></td>
                                        <td>Coders working at a startup</td>
                                        <td>December 29, 2015</td>
                                        <td>12000</td>
                                        <td>Yomi Eluwande</td>
                                    </tr>
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