
@extends('app.master')

@section('title', 'Home')

@section('content')

<section class="introduction vid">
    <div class="vid-fill">
        <video autoplay="true" loop="true" src="{{ asset('video/bannervid.mp4') }}" height="550"></video>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="hero-unit">
                    <p><strong>Browse Stock Drone Footage</strong></p>

                    <p>Find the perfect stock footage for your next project<br> from our collection of aerial footages</p>
                    <form class="hero-unit-form" action="{{ Url('search') }}" method="get">
                        <div class="form-group">
                            <input class="form-control" placeholder="Search drone footage.." name="videos" type="text">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<div>

    <section class="samplevideos container m-t-lg">
        <div class="samplevideos_header">
            <h3 class="text-center text-u-c">Top Videos</h3>
        </div>
        <div class="samplevideos_content m-t-sm">
            <div class="row">

            @foreach($posts as $post)
                <div class="m-t-lg col-sm-4 col-xs-12">
                    <div class="sv_box" id="play_thumbnail">
                        <div style="width: 100%; height: 200px; overflow: hidden;">
                            <img src="{{ $post->video->thumbnail }}">
                        </div>
                        <div class="sv_box_content">
                            <p>{{ $post->title }}</p>
                            <p>Category: <a href="#">{{ $post->category->name }}</a></p>
                            <p>Location: Bauchi</p>
                            <a class="btn btn-success one-radius" href="{{ Url('preview/' . $post->id ) }}">Preview</a>
                        </div>
                    </div>
                </div>
            @endforeach

            </div>
        </div>
    </section>

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
