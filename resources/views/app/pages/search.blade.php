
@extends('app.master')

@section('title', 'Page Title')

@section('content')

    @if (Session::has('message'))
        <script>
            swal({
                title: "Welcome",
                type: "success",
                confirmButtonColor: "#298829",
                confirmButtonText: "OK",
                closeOnConfirm: false,
                closeOnCancel: false
            },
            function(isConfirm)
            {
                if (isConfirm) {
                    window.location="/";
                }
            });
        </script>
    @endif

    <section class="search">
        <div class="container-fluid">
        <div class="row m-t-lg">
            <div class="col-sm-6">
                <p class="text-lg">Search results for Aerial shots of Lagos state</p>
                <p class="text-xs">Related: <a href="frontsearch.php">aerial view</a>, <a href="frontsearch.php">aerial city</a>, <a href="frontsearch.php">antenna</a></p>
            </div>
            <div class="col-sm-6"></div>
        </div>
        <div class="row m-t-md border-top">
           
            <div class="col-sm-3 search-left">

                <h4 class="p-l-xs m-t-md m-b-md">Sort By</h4>

                <div class="search-resolution m-t-md">
                    <h5>Resolution</h5>
                    <ul>
                        <li>
                            <a href="#">4K<span class="text-grey-dark"> 114,131</span></a>
                        </li>
                        <li>
                            <a href="#">HD<span class="text-grey-dark"> 111,931</span></a>
                        </li>
                        <li>
                            <a href="#">SD<span class="text-grey-dark"> 50,131</span></a>
                        </li>
                    </ul>
                </div>

                <form lpformnum="1" action="{{ Url('search') }}" method="get">

                    <div class="search-length m-t-md">
                        <h5>Video Length</h5>
                        <ul>
                            <li>
                                <a href="#">Less than 5s</a>
                            </li>
                            <li>
                                <a href="#">Less than 10s</a>
                            </li>
                            <li>
                                <a href="#">More than 10s</a>
                            </li>
                        </ul>
                    </div>

                    <div class="search-location m-t-md">
                        <h5>Location</h5>
                        
                        <div class="form-group">
                            <select class="form-control">
                                <option>Any Location</option>
                                <option>Lagos</option>
                                <option>Abuja</option>
                                <option>Ibadan</option>
                            </select>
                        </div>  
                    </div>

                    <div class="search-category m-t-md">
                        <h5>Category</h5>
                        
                        <div class="form-group">
                            <select class="form-control">
                                <option>Any Category</option>
                                <option>Aerial</option>
                                <option>Building</option>
                                <option>Nature</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-bg btn-success savechanges" type="submit">SEARCH</button>
                        </div>
                    </div>
                
                </form>

            </div>

            <div class="col-sm-9 p-t-md">
                @foreach($videos as $video)
                    <div class="col-xs-12 col-sm-3 fv-box">
                        <a href="{{ Url('preview/' . $video->id) }}">
                            <video width="100%">
                                <source src="{{ $video->video->watermark_url }}" type="video/mp4">
                            </video>
                            <div>
                                <br>
                                <p class="text-sm text-grey" style="display:inline">{{ $video->title }}</p>
                                <p class=""><span>HD</span> 00:12</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

        </div>
        </div>
    </section>

    <footer class="p-t-xxl p-b-xxl">
        <h3 class="text-center text-white m-b-none">Footer here</h3>
    </footer>
@endsection
