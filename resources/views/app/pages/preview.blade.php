
@extends('app.master')

@section('title', 'Page Title')

@section('content')

    <!--     
    <section class="singlevideo">
        <div class="container">


            <div class="row m-t-lg">
                <div class="col-md-6">
                    <div class="singlevideo_preview">
                        <video width="100%" controls="">
                            <source src="video/ozumba.mp4" type="video/mp4">
                        </video>
                    </div>

                </div>

                <div class="singlevideo_details_container col-md-6">
                    <div class="singlevideo_details">
                        <div class="singlevideo_header">
                            <div class="singlevideo_title">
                                <h3>Aerial Footage of Fuel Queue in Lekki, Lagos Nigeria</h3>
                            </div>
                            <div class="singlevideo_keywords">
                                <h4><strong>Tags</strong>: Lagos, Drone, Fuel Queue, Nigeria, Aerial Footage</h4>
                            </div>
                        </div>

                        <div class="singlevideo_details_specs">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="leftspecs">
                                        <p>Video Length: <span>0:15</span></p>
                                        <p>Video ID: <span>12</span></p>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="rightspecs">
                                        <p>Aspect Ratio: <span>16:9</span></p>
                                        <p>Uploaded By: <span>Yomi Eluwande</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="sv_download">
                            <table class="table table-hover">
                                <thead>
                                <tr></tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th><label><input name="priceoptions" type="radio" id="radio1" value="option1"></label></th>
                                    <td>HD</td>
                                    <td>$79</td>
                                    <td>1920 x 1080 @ 29.97fps MJPEG</td>
                                    <td>137.3MB</td>
                                </tr>
                                <tr>
                                    <th><label><input name="priceoptions" type="radio" id="radio2" value="option2"></label></th>
                                    <td>SD</td>
                                    <td>$49</td>
                                    <td>852 x 480 @ 29.97fps MOV</td>
                                    <td>11.6MB</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="row">

                            <div class="col-md-6">
                                <div class="singlevideo_details_download">
                                    <button data-toggle="modal" data-target="#myModal" type="button" class="btn btn-danger">DOWNLOAD THIS VIDEO</button>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <div class="row m-t-lg">
                <div class="reviews">
                    <div class="col-md-12">
                        <h4>Reviews</h4>

                        
                    </div>
                </div>
            </div>

            <div class="row m-t-lg">
                <div class="relatedvideos">
                    <div class="col-md-12">
                        <h4>Related Videos</h4>

                        <div class="row">
                            <div class="col-xs-12 col-sm-3 fv-box">
                                <a href="frontsinglevideo.php">
                                    <video width="100%">
                                        <source src="video/bauchi.mp4" type="video/mp4">
                                    </video>
                                    <div>
                                        <p class="text-sm text-grey"><span>HD</span> 00:12</p>
                                    </div>
                                </a>
                            </div>

                            <div class="col-xs-12 col-sm-3 fv-box">
                                <a href="frontsinglevideo.php">
                                    <video width="100%">
                                        <source src="video/events.mp4" type="video/mp4">
                                    </video>
                                    <div>
                                        <p class="text-sm text-grey"><span>HD</span> 00:22</p>
                                    </div>
                                </a>
                            </div>

                            <div class="col-xs-12 col-sm-3 fv-box">
                                <a href="frontsinglevideo.php">
                                    <video width="100%">
                                        <source src="video/ozumba.mp4" type="video/mp4">
                                    </video>
                                    <div>
                                        <p class="text-sm text-grey"><span>4K</span> 00:07</p>
                                    </div>
                                </a>

                                
                            </div>

                            <div class="col-xs-12 col-sm-3 fv-box">
                                <a href="frontsinglevideo.php">
                                        <video width="100%">
                                            <source src="video/intercontinental.mp4" type="video/mp4">
                                        </video>
                                        <div>
                                            <p class="text-sm text-grey"><span>HD</span> 00:30</p>
                                        </div>
                                </a>
                                
                            </div>

                            <div class="col-xs-12 col-sm-3 fv-box">
                                <a href="frontsinglevideo.php">
                                    <video width="100%">
                                        <source src="video/intercontinental.mp4" type="video/mp4">
                                    </video>
                                    <div>
                                        <p class="text-sm text-grey"><span>HD</span> 00:12</p>
                                    </div>
                                </a>

                            </div>

                            <div class="col-xs-12 col-sm-3 fv-box">
                                <a href="frontsinglevideo.php">
                                    <video width="100%">
                                        <source src="video/ozumba.mp4" type="video/mp4">
                                    </video>
                                    <div>
                                        <p class="text-sm text-grey"><span>HD</span> 00:22</p>
                                    </div>
                                </a>
                            </div>

                            <div class="col-xs-12 col-sm-3 fv-box">
                                <a href="frontsinglevideo.php">
                                    <video width="100%">
                                        <source src="video/events.mp4" type="video/mp4">
                                    </video>
                                    <div>
                                        <p class="text-sm text-grey"><span>4K</span> 00:07</p>
                                    </div>
                                </a>
                            </div>

                            <div class="col-xs-12 col-sm-3 fv-box">
                                <a href="frontsinglevideo.php">
                                    <video width="100%">
                                        <source src="video/bauchi.mp4" type="video/mp4">
                                    </video>
                                    <div>
                                        <p class="text-sm text-grey"><span>HD</span> 00:30</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row m-t-lg m-b-lg">
                <div class="keywords">
                    <div class="col-md-12">
                        <h4 class="m-b-md">Keywords</h4>
                        <a href="frontsearch.php">above</a>, <a href="frontsearch.php">aerial</a>, <a href="frontsearch.php">built</a>, <a href="frontsearch.php">city</a>, <a href="frontsearch.php">culture</a>, <a href="frontsearch.php">day</a>, <a href="frontsearch.php">directly</a>, <a href="frontsearch.php">district</a>, <a href="frontsearch.php">downtown</a>, <a href="frontsearch.php">exterior</a>, <a href="frontsearch.php">famous</a>, <a href="frontsearch.php">flying</a>, <a href="frontsearch.php">international</a>, <a href="frontsearch.php">landmark</a>, <a href="frontsearch.php">lower</a>, <a href="frontsearch.php">manhattan</a>, <a href="frontsearch.php">mid-air</a>, <a href="frontsearch.php">monument</a>, <a href="frontsearch.php">new</a>, <a href="frontsearch.php">place</a>, <a href="frontsearch.php">roof</a>, <a href="frontsearch.php">scene</a>, <a href="frontsearch.php">skyline</a>, <a href="frontsearch.php">state</a>, <a href="frontsearch.php">street</a>, <a href="frontsearch.php">structure</a>, <a href="frontsearch.php">symbol</a>, <a href="frontsearch.php">traditional</a>, <a href="frontsearch.php">travel</a>, <a href="frontsearch.php">urban</a>, <a href="frontsearch.php">usa</a>, <a href="frontsearch.php">view</a>, <a href="frontsearch.php">york</a>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <footer class="p-t-xxl p-b-xxl">
        <h3 class="text-center text-white m-b-none">Footer here</h3>
    </footer>

    <div class="modal" id="myModal" tabindex="-1" aria-hidden="true" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog">
        <div class="modal-content">
         
          <div class="modal-body">
            
            <div class="panel panel-default panel-fill">
                <div class="panel-heading"> 
                    <h3 class="panel-title">Cards</h3> 
                </div> 
                <div class="panel-body"> 
                    <form action="" class="cardinfo_form ">
                        
                        <div class="form-group">
                          <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                            XXXX XXXX XXXX 1234 (Visa)
                          </label> <button class="btn btn-success savechanges" href="#">PAY</button>
                        </div>
                        <div class="form-group">
                          <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                            XXXX XXXX XXXX 1234 (Mastercard)
                          </label> <button class="btn btn-success savechanges" href="#">PAY</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="panel panel-default panel-fill">
                <a href="#" data-toggle="collapse" data-target="#collapseExample">
                    <div class="panel-heading" aria-expanded="false"> 
                        <h3 class="panel-title">Add Card</h3> 
                    </div>
                </a>
                 
                <div class="panel-body collapse" id="collapseExample"> 
                    <form action="" class="cardinfo_form ">
                        
                        <div class="form-group">
                            <label>Card Number</label>
                            <input class="form-control" type="text" placeholder="Card No" name="number">
                        </div>

                        <div class="form-group">
                            <label>Full Name</label>
                            <input class="form-control" type="text" placeholder="Full Name" name="name">
                        </div>
                        <div class="form-group">
                            
                            <div class="row">
                                <div class="col-md-6 col-xs-6">
                                    <label>Expiry Date</label>
                                    <input class="form-control" type="text" placeholder="MM/YY" name="expiry">
                                </div>
                                <div class="col-md-6 col-xs-6">
                                    <label>CVC</label>
                                    <input class="form-control" type="text" placeholder="CVC" name="cvc">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <a class="btn btn-success savechanges" href="#">SAVE CHANGES</a>
                        </div>
                    </form>
                </div>
            </div>  

          </div>
        </div>
      </div>
    </div> 
    -->



    <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
            <div class="row" style="margin-bottom:40px;">
              <div class="col-md-8 col-md-offset-2">
                <p>
                    <div>
                        Lagos Eyo Print Tee Shirt
                        ₦ 2,950
                    </div>
                </p>
                <input type="hidden" name="email" value="emekaosuagwu@hotmail.com"> {{-- required --}}
                <input type="hidden" name="orderID" value="345">
                <input type="hidden" name="amount" value="800"> {{-- required in kobo --}}
                <input type="hidden" name="quantity" value="3">
                <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
                <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}"> {{-- required --}}
                {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}

                 <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}


                <p>
                  <button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!">
                  <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
                  </button>
                </p>
              </div>
            </div>
    </form>

@endsection
