
@extends('dashboard.master')

@section('content')
	
	@include('dashboard.pages.includes.sections.side_bar')
	<div class="content-page">
       <div class="content">
           <div class="container">

               <!-- Page-Title -->
               <div class="row">
                   <div class="col-sm-12">
                       <h4 class="pull-left page-title">Welcome !</h4>
                       <ol class="breadcrumb pull-right">
                           <li><a href="#">AnakleVM</a></li>
                           <li class="active">Dashboard</li>
                       </ol>
                   </div>
               </div>

               <!-- Start Widget -->
               <div class="row">
                   <div class="col-md-6 col-sm-6 col-lg-3">
                       <div class="mini-stat clearfix bx-shadow bg-info">
                           <span class="mini-stat-icon"><i class="ion-social-usd"></i></span>
                           <div class="mini-stat-info text-right">
                               <span class="counter">800,000</span>
                               Total Sales
                           </div>
                           <div class="tiles-progress">
                               <div class="m-t-20">
                                   <h5 class="text-uppercase text-white m-0">Last week's Sales <span class="pull-right">35</span></h5>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="col-md-6 col-sm-6 col-lg-3">
                       <div class="mini-stat clearfix bg-purple bx-shadow">
                           <span class="mini-stat-icon"><i class="ion-ios7-cart"></i></span>
                           <div class="mini-stat-info text-right">
                               <span class="counter">200</span>
                               New Orders
                           </div>
                           <div class="tiles-progress">
                               <div class="m-t-20">
                                   <h5 class="text-uppercase text-white m-0">Last week's Orders <span class="pull-right">59</span></h5>
                               </div>
                           </div>
                       </div>
                   </div>
                   
                   <div class="col-md-6 col-sm-6 col-lg-3">
                       <div class="mini-stat clearfix bg-success bx-shadow">
                           <span class="mini-stat-icon"><i class="ion-play"></i></span>
                           <div class="mini-stat-info text-right">
                               <span class="counter">205</span>
                               Videos
                           </div>
                           <div class="tiles-progress">
                               <div class="m-t-20">
                                   <h5 class="text-uppercase text-white m-0">Last month's Videos <span class="pull-right">120</span></h5>
                               </div>
                           </div>
                       </div>
                   </div>

                   <div class="col-md-6 col-sm-6 col-lg-3">
                       <div class="mini-stat clearfix bg-primary bx-shadow">
                           <span class="mini-stat-icon"><i class="ion-android-contacts"></i></span>
                           <div class="mini-stat-info text-right">
                               <span class="counter">210</span>
                               New Users
                           </div>
                           <div class="tiles-progress">
                               <div class="m-t-20">
                                   <h5 class="text-uppercase text-white m-0">Last month's Users <span class="pull-right">36</span></h5>
                               </div>
                           </div>
                       </div>
                   </div>
               </div> 
               <!-- End row-->


               <div class="row">
                   <div class="col-lg-8">
                       <div class="portlet"><!-- /portlet heading -->
                           <div class="portlet-heading">
                               <h3 class="portlet-title text-dark text-uppercase">
                                   Website Stats
                               </h3>
                               <div class="portlet-widgets">
                                   <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                                   <span class="divider"></span>
                                   <a data-toggle="collapse" data-parent="#accordion1" href="#portlet1"><i class="ion-minus-round"></i></a>
                                   <span class="divider"></span>
                                   <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
                               </div>
                               <div class="clearfix"></div>
                           </div>
                           <div id="portlet1" class="panel-collapse collapse in">
                               <div class="portlet-body">
                                   <div class="row">
                                       <div class="col-md-12">
                                           <div id="website-stats" style="position: relative;height: 320px"></div>
                                           <div class="row text-center m-t-30">
                                               <div class="col-sm-4">
                                                   <h4 class="counter">86,956</h4>
                                                   <small class="text-muted"> Weekly Report</small>
                                               </div>
                                               <div class="col-sm-4">
                                                   <h4 class="counter">86,69</h4>
                                                   <small class="text-muted">Monthly Report</small>
                                               </div>
                                               <div class="col-sm-4">
                                                   <h4 class="counter">948,16</h4>
                                                   <small class="text-muted">Yearly Report</small>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div> <!-- /Portlet -->
                   </div> <!-- end col -->

                   <div class="col-lg-4">
                       <div class="portlet"><!-- /portlet heading -->
                           <div class="portlet-heading">
                               <h3 class="portlet-title text-dark text-uppercase">
                                   Selling Stats
                               </h3>
                               <div class="portlet-widgets">
                                   <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                                   <span class="divider"></span>
                                   <a data-toggle="collapse" data-parent="#accordion1" href="#portlet2"><i class="ion-minus-round"></i></a>
                                   <span class="divider"></span>
                                   <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
                               </div>
                               <div class="clearfix"></div>
                           </div>
                           <div id="portlet2" class="panel-collapse collapse in">
                               <div class="portlet-body">
                                   <div class="row">
                                       <div class="col-md-12">
                                           <div id="pie-chart">
                                               <div id="pie-chart-container" class="flot-chart" style="height: 320px">
                                               </div>
                                           </div>

                                           <div class="row text-center m-t-30">
                                               <div class="col-sm-6">
                                                   <h4 class="counter">86,956</h4>
                                                   <small class="text-muted"> Weekly Report</small>
                                               </div>
                                               <div class="col-sm-6">
                                                   <h4 class="counter">86,69</h4>
                                                   <small class="text-muted">Monthly Report</small>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div> <!-- /Portlet -->
                   </div> <!-- end col -->
               </div> <!-- End row -->


               <div class="row">
                   <!-- INBOX -->
                   <div class="col-lg-12 col-md-12">
                       <div class="panel panel-default">
                           <div class="panel-heading">
                               <h4 class="panel-title">Top Uploads</h4>
                           </div>
                           <div class="panel-body">
                               <table class="table table-hover table-responsive" id="sortable-table">
                                   <thead>
                                   <tr>
                                   
                                       <th>Title</th>
                                       <th># of Downloads</th>
                                       <th># of Views</th>
                                       <th>Price (₦)</th>
                                       <th></th>
                                   </tr>
                                   </thead>
                                   <tbody>
                                   <tr>
                                       <td>Aerial Footage of Fuel Queue in Lagos</td>
                                       <td>200</td>
                                       <td>1000</td>
                                       <td>5000</td>
                                       <td><a href="singlevideo.html" class="btn btn-success allvideos_btn">View</a></td>
                                   </tr>
                                   <tr>
                                       <td>RAerial Footage of Fuel Queue in Lagos</td>
                                       <td>500</td>
                                       <td>15000</td>
                                       <td>7500</td>
                                       <td><a href="singlevideo.html" class="btn btn-success allvideos_btn">View</a></td>
                                   </tr>
                                   <tr>
                                       <td>GAerial Footage of Fuel Queue in Lagos</td>
                                       <td>210</td>
                                       <td>2000</td>
                                       <td>25000</td>
                                       <td><a href="singlevideo.html" class="btn btn-success allvideos_btn">View</a></td>
                                   </tr>

                                   <tr>
                                       <td>GAerial Footage of Fuel Queue in Lagos</td>
                                       <td>210</td>
                                       <td>2000</td>
                                       <td>25000</td>
                                       <td><a href="singlevideo.html" class="btn btn-success allvideos_btn">View</a></td>
                                   </tr>
                               
                                   <tr>
                                       <td>ZAerial Footage of Fuel Queue in Lagos</td>
                                       <td>123</td>
                                       <td>1234</td>
                                       <td>15000</td>
                                       <td><a href="singlevideo.html" class="btn btn-success allvideos_btn">View</a></td>
                                   </tr>

                                   </tbody>
                               </table>
                           </div>
                   </div>
               </div> <!-- end row -->

           </div> <!-- container -->
       </div>
   </div>
@endsection