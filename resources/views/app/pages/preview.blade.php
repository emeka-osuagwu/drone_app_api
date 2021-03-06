
@extends('app.master')

@section('title', 'Page Title')

@section('content')
        
    <section class="singlevideo">
        <div class="container">


            <div class="row m-t-lg">
                <div class="col-md-6">
                    <div class="singlevideo_preview">
                        <video width="100%" controls="">
                            <source src="{{ $video->video->watermark_url }}" type="video/mp4">
                        </video>
                    </div>

                </div>

                <div class="singlevideo_details_container col-md-6">
                    <div class="singlevideo_details">
                        <div class="singlevideo_header">
                            <div class="singlevideo_title">
                                <h3>{{ $video->title }}</h3>
                            </div>
                            <div class="singlevideo_keywords">
                                <h4><strong>Tags</strong>: {{ $video->tags }}</h4>
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
                                        <p>Uploaded By: <span>{{$video->user->first_name . " "  . $video->user->last_name}}</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <form action="{{route('pay')}}" method="post" >

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


                                @if(Auth::check())
                                  
                                    <input type="hidden" name="email" value="{{ Auth::user()->email }}">
                                    <input type="hidden" name="orderID" value="{{ rand(234, 4948) }}">
                                    <input type="hidden" name="amount" value="{{ tofloat($video->price) }}">
                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"> 
                                    <input type="hidden" name="post_id" value="{{ $video->id }}"> 
                                    <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}">
                                    <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}"> 
                                   
                                    @if(checkUserPaidForVideo(Auth::user()->id, $video->id))
                                        <div class="col-md-6">
                                            <div class="singlevideo_details_download">
                                                <a href="{{ $video->video->original_url }}" type="button" class="btn btn-success" download>Save Video</a>
                                            </div>
                                        </div>
                                    @else
                                        <div class="col-md-6">
                                            <div class="singlevideo_details_download">
                                                <button type="submit" class="btn btn-danger">DOWNLOAD THIS VIDEO</button>
                                            </div>
                                        </div>
                                    @endif
                                @else
                                    <div class="col-md-6">
                                        <div class="singlevideo_details_download">
                                            <a href="{{ Url('login') }}" class="btn btn-danger">DOWNLOAD THIS VIDEO</a>
                                        </div>
                                    </div>
                                @endif

                            </div>

                        </form>
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

    @include('app.pages.sections.footer')


@endsection
