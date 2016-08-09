
@extends('app.master')

@section('title', 'Page Title')

@section('content')

<section class="introduction vid">
    <div class="vid-fill">
        <video autoplay="true" loop="true" src="video/bannervid.mp4" height="550"></video>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="hero-unit">
                    <p><strong>Browse Stock Drone Footages</strong></p>

                    <p>Find the perfect stock footage for your next project<br> from our collection of aerial footages</p>
                    <form class="hero-unit-form">
                        <div class="form-group">
                            <input class="form-control" placeholder="Search drone footage.." type="text">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<div>
    <section class="howitworks container">
        <div class="howitworks_header">
            <h3>How it works</h3>
        </div>
        <div class="howitworks_content">
            <div class="row">
                <div class="col-sm-4">
                    <div class="box">
                        <img src="img/naira.png">
                        <div class="box_content">
                            <div class="box_content_header">
                                <p>Browse Videos</p>
                            </div>
                            <div class="box_content_details">
                                <p>Search through our collection for your perfect video.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="box">
                        <img src="img/naira.png">
                        <div class="box_content">
                            <div class="box_content_header">
                                <p>Preview Videos</p>
                            </div>
                            <div class="box_content_details">
                                <p>Preview your video to make sure it fits your use case.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="box">
                        <img src="img/naira.png">
                        <div class="box_content">
                            <div class="box_content_header">
                                <p>Purchase Videos</p>
                            </div>
                            <div class="box_content_details">
                                <p>Pay for your video with our seamless payment solution.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>      
        </div>
    </section>

    <section class="browsecategories container-fluid">
        <div class="browsecategories_header">
            <h3>Browse Categories</h3>
        </div>
        <div class="browsecategories_content">
            <div class="row">
                <div class="col-sm-3 col-xs-6">
                    <div>
                        <ul class="browsecategories_list">
                            <li><a href="#">Building</a></li>
                            <li><a href="#">Construction</a></li>
                            <li><a href="#">Aerial</a></li>
                            <li><a href="#">Northern Nigeria</a></li>
                            <li><a href="#">Landscape</a></li>
                            <li><a href="#">Real Estate</a></li>
                            <li><a href="#">Traffic</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div>
                        <ul class="browsecategories_list">
                            <li><a href="#">Building</a></li>
                            <li><a href="#">Construction</a></li>
                            <li><a href="#">Aerial</a></li>
                            <li><a href="#">Northern Nigeria</a></li>
                            <li><a href="#">Landscape</a></li>
                            <li><a href="#">Real Estate</a></li>
                            <li><a href="#">Traffic</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div>
                        <ul class="browsecategories_list">
                            <li><a href="#">Building</a></li>
                            <li><a href="#">Construction</a></li>
                            <li><a href="#">Aerial</a></li>
                            <li><a href="#">Northern Nigeria</a></li>
                            <li><a href="#">Landscape</a></li>
                            <li><a href="#">Real Estate</a></li>
                            <li><a href="#">Traffic</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div>
                        <ul class="browsecategories_list">
                            <li><a href="#">Building</a></li>
                            <li><a href="#">Construction</a></li>
                            <li><a href="#">Aerial</a></li>
                            <li><a href="#">Northern Nigeria</a></li>
                            <li><a href="#">Landscape</a></li>
                            <li><a href="#">Real Estate</a></li>
                            <li><a href="#">Traffic</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="samplevideos container m-t-lg">
        <div class="samplevideos_header">
            <h3 class="text-center text-u-c">Top Videos</h3>
        </div>
        <div class="samplevideos_content m-t-sm">
            <div class="row">
                <div class="m-t-lg col-sm-4 col-xs-12">
                    <div class="sv_box" id="play_thumbnail">
                        <video loop>
                            <source src="./video/bauchi.mp4" type="video/mp4">
                        </video>
                        <div class="sv_box_content">
                            <p>Footage of a rural environment in northern nigeria</p>
                            <p>Category: <a href="#">Northern Nigeria</a></p>
                            <p>Location: Bauchi</p>
                            <a class="btn btn-success one-radius" ui-sref="singlevideo">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="m-t-lg col-sm-4 col-xs-12">
                    <div class="sv_box" id="play_thumbnail">
                        <video loop>
                            <source src="./video/beach.mp4" type="video/mp4">
                        </video>
                        <div class="sv_box_content">
                            <p>Aerial shot of Lagos Island Beach</p>
                            <p>Category: <a href="#">Landscape</a></p>
                            <p>Location: Lagos</p>
                            <a class="btn btn-success one-radius" ui-sref="singlevideo">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="m-t-lg col-sm-4 col-xs-12">
                    <div class="sv_box" id="play_thumbnail">
                        <video loop>
                            <source src="./video/events.mp4" type="video/mp4">
                        </video>
                        <div class="sv_box_content">
                            <p>Night event in Lagos with lightning</p>
                            <p>Category: <a href="#">Events</a></p>
                            <p>Location: Lagos</p>
                            <a class="btn btn-success one-radius" ui-sref="singlevideo">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="m-t-lg col-sm-4 col-xs-12">
                    <div class="sv_box" id="play_thumbnail">
                        <video loop>
                            <source src="./video/intercontinental.mp4" type="video/mp4">
                        </video>
                        <div class="sv_box_content">
                            <p>Aerial shot of the Lagos landscape</p>
                            <p>Category: <a href="#">Environment</a></p>
                            <p>Location: Lagos</p>
                            <a class="btn btn-success one-radius" ui-sref="singlevideo">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="m-t-lg col-sm-4 col-xs-12">
                    <div class="sv_box" id="play_thumbnail">
                        <video loop>
                            <source src="./video/roundabout.mp4" type="video/mp4">
                        </video>
                        <div class="sv_box_content">
                            <p>Aerial footage of 2nd Roundabout Lekki, Lagos</p>
                            <p>Category: <a href="#">Traffic</a></p>
                            <p>Location: Lagos</p>
                            <a class="btn btn-success one-radius" ui-sref="singlevideo">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="m-t-lg col-sm-4 col-xs-12">
                    <div class="sv_box" id="play_thumbnail">
                        <video loop>
                            <source src="./video/ozumba.mp4" type="video/mp4">
                        </video>
                        <div class="sv_box_content">
                            <p>Aerial Footage of traffic at Ozumba Mbadiwe</p>
                            <p>Category: <a href="#">Traffic</a></p>
                            <p>Location: Lagos</p>
                            <a class="btn btn-success one-radius" ui-sref="singlevideo">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="getstarted container-fluid m-t-lg">
        <div class="getstarted_content">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="text-black text-center">Get Started</h3>
                    <p class="text-black text-center text-sm">Purchase your videos and get a quickstart on your next project</p>

                    <div class="m-t-lg">
                        <form class="getstarted_form form-inline">
                            <div class="form-group m-r">
                                <input class="form-control" placeholder="Email Address" type="text" required>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success one-radius large-btn">Sign Up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
